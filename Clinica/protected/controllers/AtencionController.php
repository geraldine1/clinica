<?php

class AtencionController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('@'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete', 'tratamientos'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('viewReporte', 'creaReporte'),
                'users' => array('Dentista'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionViewReporte() {
        $modelo = new ReporteAtenciones();
        if (isset($_POST['ReporteAtenciones'])) {
            $modelo->attributes = $_POST['ReporteAtenciones'];
            if ($modelo->fin >= $modelo->inicio) {
                $connection = Yii::app()->db;
                $fecha1 = new DateTime($modelo->inicio);
                $fecha2 = $fecha1->format("d-m-Y");
                $fecha3 = new DateTime($modelo->fin);
                $fecha4 = $fecha3->format("d-m-Y");
                $sql = "SELECT * from ATENCION where ATENCION.fecha >=" . "'" . $modelo->inicio . "'" .
                        "and ATENCION.fecha <=" . "'" . $modelo->fin . "'";
                $command = $connection->createCommand($sql);
                $dataReader = $command->query();
                $rows = $dataReader->readAll();
                $mPDF1 = Yii::app()->ePdf->mpdf();
                $mPDF1->WriteHTML("<div align='center'><img src='slider/marca.jpg'></div>");
                $mPDF1->WriteHTML("<H3 align='center'>Atenciones entre " . $fecha2 . " y " . $fecha4 . "<H3>");
                $mPDF1->WriteHTML("<br>");
                $i = 1;
                foreach ($rows as $row) {

                    $atenciones += $row['resultado'];
                    $consulta1 = "SELECT nombre_paciente, apellidos_paciente, paciente.rut_paciente 
                    FROM paciente, ficha_dental, atencion 
                    WHERE paciente.rut_paciente = ficha_dental.rut_paciente AND ficha_dental.id_ficha = atencion.id_ficha AND atencion.id_atencion = " . $row['id_atencion'];
                    $command = $connection->createCommand($consulta1);
                    $dataReader = $command->query();
                    $filas = $dataReader->readAll();
                    foreach ($filas as $fila) {
                        $mPDF1->WriteHTML("Atención de " . $fila['nombre_paciente'] . $fila['apellidos_paciente'] . "<br><br>");
                    }

                    $i++;
                    $mPDF1->WriteHTML("<table border='1'>");
                    $mPDF1->WriteHTML("<tr>");
                    $mPDF1->WriteHTML("<td>RUN: " . $fila['rut_paciente'] . "</td>");
                    $mPDF1->WriteHTML("<td>Fecha: " . $row['fecha'] . "</td></tr>");

                    $sql2 = "SELECT * from TRATAMIENTO_REALIZADO join TRATAMIENTO on 
                TRATAMIENTO_REALIZADO.id_tratamiento = TRATAMIENTO.id_tratamiento 
                where TRATAMIENTO_REALIZADO.id_atencion = " . "'" . $row['id_atencion'] . "'";

                    $command = $connection->createCommand($sql2);
                    $dataReader = $command->query();
                    $rows2 = $dataReader->readAll();

                    foreach ($rows2 as $row2) {
                        $mPDF1->WriteHTML("<tr>");
                        //$tratamientos += $row2['nombre'];
                        //$valor += $row2['valor'];
                        $mPDF1->WriteHTML("<td>" . $row2['nombre'] . "</td>");
                        $mPDF1->WriteHTML("<td>$" . $row2['valor'] . "</td>");
                        $mPDF1->WriteHTML("</tr>");
                    }
                    $sql3 = "select sum(valor) from TRATAMIENTO, TRATAMIENTO_REALIZADO, ATENCION where TRATAMIENTO.id_tratamiento = TRATAMIENTO_REALIZADO.id_tratamiento AND 
                        TRATAMIENTO_REALIZADO.id_atencion = ATENCION.id_atencion AND ATENCION.id_atencion = " . "'" . $row['id_atencion'] . "'" . "AND ATENCION.fecha >=" . "'" . $modelo->inicio . "'" . "and ATENCION.fecha <=" . "'" . $modelo->fin . "'";

                    $command = $connection->createCommand($sql3);
                    $dataReader = $command->query();
                    $rows3 = $dataReader->readAll();

                    foreach ($rows3 as $row3) {
                        $mPDF1->WriteHTML("<tr>");
                        $mPDF1->WriteHTML("<td><strong>Total</strong></td>");
                        $mPDF1->WriteHTML("<td>$" . $row3['sum(valor)'] . "</td>");
                        $mPDF1->WriteHTML("</tr>");
                    }
                    $mPDF1->WriteHTML("</table>");
                    $mPDF1->WriteHTML("<br>");
                }
                $sql4 = "select sum(valor) from TRATAMIENTO, TRATAMIENTO_REALIZADO, ATENCION where 
            TRATAMIENTO.id_tratamiento = TRATAMIENTO_REALIZADO.id_tratamiento AND TRATAMIENTO_REALIZADO.id_atencion = ATENCION.id_atencion 
            AND ATENCION.fecha >=" . "'" . $modelo->inicio . "'" .
                        "and ATENCION.fecha <=" . "'" . $modelo->fin . "'";
                $command = $connection->createCommand($sql4);
                $dataReader = $command->query();
                $rows4 = $dataReader->readAll();
                foreach ($rows4 as $row4) {
                    $mPDF1->WriteHTML("<strong>Total $" . $row4['sum(valor)'] . "</strong>");
                }
                $mPDF1->Output('Mi archivo', "I");
            }else{
                $modelo->addError('inicio','La fecha de inicio no debe ser mayor a la fecha de fin');
                $this->render('reporteAtencion', array('model' => $modelo));
            }
        } else {
            $this->render('reporteAtencion', array('model' => $modelo));
        }
    }

    public function actionCreaReporte($inicio, $fin) {
        echo $inicio;
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($idFicha) {
        $model = new Atencion;
        $model->id_ficha = $idFicha;
        date_default_timezone_set('Chile/Continental');
        $model->fecha = date("Y-m-d");
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Atencion'])) {
            $model->attributes = $_POST['Atencion'];
            if ($model->save())
                $this->redirect(array('tratamientoRealizado/create', 'id' => $model->id_atencion));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionTratamientos($id) {
        $modelTratamiento = new TratamientoRealizado('search');
        if (isset($_GET ['TratamientoRealizado']))
            $modelTratamiento->attributes = $_GET ['TratamientoRealizado'];
        $this->render('listadoTratamientos', array(
            'model' => $this->loadModel($id),
            'modelTratamiento' => $modelTratamiento,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Atencion'])) {
            $model->attributes = $_POST['Atencion'];
            if ($model->save())
                $rutPaciente = FichaDental::model()->findByPk($model->id_ficha);
            $this->redirect(array('paciente/atenciones', 'id' => $rutPaciente->rut_paciente));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Atencion');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Atencion('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Atencion']))
            $model->attributes = $_GET['Atencion'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Atencion the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Atencion::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Atencion $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'atencion-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
