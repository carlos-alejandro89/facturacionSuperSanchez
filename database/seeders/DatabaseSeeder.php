<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\estatus;
use App\Models\sat_regimen_fiscal;
use App\Models\sat_uso_cfdi;
use App\Models\sat_regimen_uso_cfdi;
use App\Models\motivos_declina_solicitud;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        estatus::insert(['id'=>1,'estatus'=>'FACTURA SOLICITADA']);
        estatus::insert(['id'=>2,'estatus'=>'EN PROCESO']);
        estatus::insert(['id'=>3,'estatus'=>'FACTURADO']);
        estatus::insert(['id'=>4,'estatus'=>'FACTURADO PREVIAMENTE']);
        estatus::insert(['id'=>5,'estatus'=>'FACTURA CANCELADA']);
        estatus::insert(['id'=>6,'estatus'=>'DECLINADA']);
        estatus::insert(['id'=>7,'estatus'=>'ATENDIDO']);
        estatus::insert(['id'=>8,'estatus'=>'CERRADO']);
        estatus::insert(['id'=>9,'estatus'=>'ENVIADO']);

        sat_regimen_fiscal::insert(['id'=>1,'cve_regimen'=>'601','desc_regimen'=>'GENERAL DE LEY PERSONAS MORALES','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>2,'cve_regimen'=>'603','desc_regimen'=>'PERSONAS MORALES CON FINES NO LUCRATIVOS','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>3,'cve_regimen'=>'605','desc_regimen'=>'SUELDOS Y SALARIOS E INGRESOS ASIMILADOS A SALARIOS','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>4,'cve_regimen'=>'606','desc_regimen'=>'ARRENDAMIENTO','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>5,'cve_regimen'=>'608','desc_regimen'=>'DEMÁS INGRESOS','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>6,'cve_regimen'=>'609','desc_regimen'=>'CONSOLIDACIÓN','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>7,'cve_regimen'=>'610','desc_regimen'=>'RESIDENTES EN EL EXTRANJERO SIN ESTABLECIMIENTO PERMANENTE EN MÉXICO','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>8,'cve_regimen'=>'611','desc_regimen'=>'INGRESOS POR DIVIDENDOS (SOCIOS Y ACCIONISTAS)','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>9,'cve_regimen'=>'612','desc_regimen'=>'PERSONAS FÍSICAS CON ACTIVIDADES EMPRESARIALES Y PROFESIONALES','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>10,'cve_regimen'=>'614','desc_regimen'=>'INGRESOS POR INTERESES','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>11,'cve_regimen'=>'616','desc_regimen'=>'SIN OBLIGACIONES FISCALES','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>12,'cve_regimen'=>'620','desc_regimen'=>'SOCIEDADES COOPERATIVAS DE PRODUCCIÓN QUE OPTAN POR DIFERIR SUS INGRESOS','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>13,'cve_regimen'=>'621','desc_regimen'=>'INCORPORACIÓN FISCAL','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>14,'cve_regimen'=>'622','desc_regimen'=>'ACTIVIDADES AGRÍCOLAS, GANADERAS, SILVÍCOLAS Y PESQUERAS','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>15,'cve_regimen'=>'623','desc_regimen'=>'OPCIONAL PARA GRUPOS DE SOCIEDADES','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>16,'cve_regimen'=>'624','desc_regimen'=>'COORDINADOS','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>17,'cve_regimen'=>'628','desc_regimen'=>'HIDROCARBUROS','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>18,'cve_regimen'=>'607','desc_regimen'=>'RÉGIMEN DE ENAJENACIÓN O ADQUISICIÓN DE BIENES','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>19,'cve_regimen'=>'629','desc_regimen'=>'DE LOS REGÍMENES FISCALES PREFERENTES Y DE LAS EMPRESAS MULTINACIONALES','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>20,'cve_regimen'=>'630','desc_regimen'=>'ENAJENACIÓN DE ACCIONES EN BOLSA DE VALORES','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>21,'cve_regimen'=>'615','desc_regimen'=>'RÉGIMEN DE LOS INGRESOS POR OBTENCIÓN DE PREMIOS','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>22,'cve_regimen'=>'625','desc_regimen'=>'RÉGIMEN DE LAS ACTIVIDADES EMPRESARIALES CON INGRESOS A TRAVÉS DE PLATAFORMAS TECNOLÓGICAS','activo' => 1]);
        sat_regimen_fiscal::insert(['id'=>23,'cve_regimen'=>'626','desc_regimen'=>'RÉGIMEN SIMPLIFICADO DE CONFIANZA','activo' => 1]);

        sat_uso_cfdi::insert(['id'=>1,'cve_uso_cfdi'=>'G01','desc_uso_cfdi'=>'ADQUISICIÓN DE MERCANCIAS','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>2,'cve_uso_cfdi'=>'G02','desc_uso_cfdi'=>'DEVOLUCIONES, DESCUENTOS O BONIFICACIONES','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>3,'cve_uso_cfdi'=>'G03','desc_uso_cfdi'=>'GASTOS EN GENERAL','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>4,'cve_uso_cfdi'=>'I01','desc_uso_cfdi'=>'CONSTRUCCIONES','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>5,'cve_uso_cfdi'=>'I02','desc_uso_cfdi'=>'MOBILARIO Y EQUIPO DE OFICINA POR INVERSIONES','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>6,'cve_uso_cfdi'=>'I03','desc_uso_cfdi'=>'EQUIPO DE TRANSPORTE','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>7,'cve_uso_cfdi'=>'I04','desc_uso_cfdi'=>'EQUIPO DE COMPUTO Y ACCESORIOS','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>8,'cve_uso_cfdi'=>'I05','desc_uso_cfdi'=>'DADOS, TROQUELES, MOLDES, MATRICES Y HERRAMENTAL','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>9,'cve_uso_cfdi'=>'I06','desc_uso_cfdi'=>'COMUNICACIONES TELEFÓNICAS','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>10,'cve_uso_cfdi'=>'I07','desc_uso_cfdi'=>'COMUNICACIONES SATELITALES','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>11,'cve_uso_cfdi'=>'I08','desc_uso_cfdi'=>'OTRA MAQUINARIA Y EQUIPO','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>12,'cve_uso_cfdi'=>'D01','desc_uso_cfdi'=>'HONORARIOS MÉDICOS, DENTALES Y GASTOS HOSPITALARIOS.','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>13,'cve_uso_cfdi'=>'D02','desc_uso_cfdi'=>'GASTOS MÉDICOS POR INCAPACIDAD O DISCAPACIDAD','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>14,'cve_uso_cfdi'=>'D03','desc_uso_cfdi'=>'GASTOS FUNERALES.','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>15,'cve_uso_cfdi'=>'D04','desc_uso_cfdi'=>'DONATIVOS.','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>16,'cve_uso_cfdi'=>'D05','desc_uso_cfdi'=>'INTERESES REALES EFECTIVAMENTE PAGADOS POR CRÉDITOS HIPOTECARIOS (CASA HABITACIÓN)','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>17,'cve_uso_cfdi'=>'D06','desc_uso_cfdi'=>'APORTACIONES VOLUNTARIAS AL SAR.','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>18,'cve_uso_cfdi'=>'D07','desc_uso_cfdi'=>'PRIMAS POR SEGUROS DE GASTOS MÉDICOS.','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>19,'cve_uso_cfdi'=>'D08','desc_uso_cfdi'=>'GASTOS DE TRANSPORTACIÓN ESCOLAR OBLIGATORIA.','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>20,'cve_uso_cfdi'=>'D09','desc_uso_cfdi'=>'DEPOSITOS EN CUENTAS PARA EL AHORRO, PRIMAS QUE TENGAN COMO BASE PLANES DE PENSIONES','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>21,'cve_uso_cfdi'=>'D10','desc_uso_cfdi'=>'PAGOS POR SERVICIOS EDUCATIVOS (COLEGIATURAS)','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>22,'cve_uso_cfdi'=>'P01','desc_uso_cfdi'=>'POR DEFINIR','activo'=>1]);
        sat_uso_cfdi::insert(['id'=>23,'cve_uso_cfdi'=>'S01','desc_uso_cfdi'=>'SIN EFECTOS FISCALES','activo'=>1]);

        //Usos CFDI por regimen Fiscal: G01 - Adquisicion de mercancias
        sat_regimen_uso_cfdi::insert(['regimen_id'=>1,'uso_cfdi_id'=>1]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>2,'uso_cfdi_id'=>1]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>1]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>1]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>12,'uso_cfdi_id'=>1]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>13,'uso_cfdi_id'=>1]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>14,'uso_cfdi_id'=>1]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>15,'uso_cfdi_id'=>1]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>16,'uso_cfdi_id'=>1]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>1]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>23,'uso_cfdi_id'=>1]);

        //Usos CFDI por regimen Fiscal: G02 - Devoluciones, descuentos o bonificaciones
        sat_regimen_uso_cfdi::insert(['regimen_id'=>1,'uso_cfdi_id'=>2]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>2,'uso_cfdi_id'=>2]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>2]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>2]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>12,'uso_cfdi_id'=>2]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>13,'uso_cfdi_id'=>2]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>14,'uso_cfdi_id'=>2]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>15,'uso_cfdi_id'=>2]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>16,'uso_cfdi_id'=>2]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>2]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>23,'uso_cfdi_id'=>2]);

         //Usos CFDI por regimen Fiscal: G03 - Gastos en general
         sat_regimen_uso_cfdi::insert(['regimen_id'=>1,'uso_cfdi_id'=>3]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>2,'uso_cfdi_id'=>3]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>3]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>3]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>12,'uso_cfdi_id'=>3]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>13,'uso_cfdi_id'=>3]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>14,'uso_cfdi_id'=>3]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>15,'uso_cfdi_id'=>3]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>16,'uso_cfdi_id'=>3]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>3]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>23,'uso_cfdi_id'=>3]);

         //Usos CFDI por regimen Fiscal: I01 - Construcciones
         sat_regimen_uso_cfdi::insert(['regimen_id'=>1,'uso_cfdi_id'=>4]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>2,'uso_cfdi_id'=>4]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>4]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>4]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>12,'uso_cfdi_id'=>4]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>13,'uso_cfdi_id'=>4]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>14,'uso_cfdi_id'=>4]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>15,'uso_cfdi_id'=>4]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>16,'uso_cfdi_id'=>4]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>4]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>23,'uso_cfdi_id'=>4]);

         //Usos CFDI por regimen Fiscal: I02 - Mobiliario y equipo de oficina por inversiones
         sat_regimen_uso_cfdi::insert(['regimen_id'=>1,'uso_cfdi_id'=>5]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>2,'uso_cfdi_id'=>5]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>5]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>5]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>12,'uso_cfdi_id'=>5]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>13,'uso_cfdi_id'=>5]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>14,'uso_cfdi_id'=>5]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>15,'uso_cfdi_id'=>5]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>16,'uso_cfdi_id'=>5]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>5]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>23,'uso_cfdi_id'=>5]);

         //Usos CFDI por regimen Fiscal: I03 - EQUIPO DE TRANSPORTE
         sat_regimen_uso_cfdi::insert(['regimen_id'=>1,'uso_cfdi_id'=>6]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>2,'uso_cfdi_id'=>6]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>6]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>6]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>12,'uso_cfdi_id'=>6]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>13,'uso_cfdi_id'=>6]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>14,'uso_cfdi_id'=>6]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>15,'uso_cfdi_id'=>6]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>16,'uso_cfdi_id'=>6]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>6]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>23,'uso_cfdi_id'=>6]);

         //Usos CFDI por regimen Fiscal: I04 - EQUIPO DE COMPUTO Y ACCESORIOS
         sat_regimen_uso_cfdi::insert(['regimen_id'=>1,'uso_cfdi_id'=>7]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>2,'uso_cfdi_id'=>7]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>7]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>7]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>12,'uso_cfdi_id'=>7]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>13,'uso_cfdi_id'=>7]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>14,'uso_cfdi_id'=>7]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>15,'uso_cfdi_id'=>7]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>16,'uso_cfdi_id'=>7]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>7]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>23,'uso_cfdi_id'=>7]);

         //Usos CFDI por regimen Fiscal: I05 - DADOS, TROQUELES, MOLDES, MATRICES Y HERRAMENTAL
         sat_regimen_uso_cfdi::insert(['regimen_id'=>1,'uso_cfdi_id'=>8]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>2,'uso_cfdi_id'=>8]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>8]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>8]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>12,'uso_cfdi_id'=>8]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>13,'uso_cfdi_id'=>8]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>14,'uso_cfdi_id'=>8]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>15,'uso_cfdi_id'=>8]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>16,'uso_cfdi_id'=>8]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>8]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>23,'uso_cfdi_id'=>8]);

         //Usos CFDI por regimen Fiscal: I06 - COMUNICACIONES TELEFÓNICAS
         sat_regimen_uso_cfdi::insert(['regimen_id'=>1,'uso_cfdi_id'=>9]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>2,'uso_cfdi_id'=>9]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>9]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>9]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>12,'uso_cfdi_id'=>9]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>13,'uso_cfdi_id'=>9]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>14,'uso_cfdi_id'=>9]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>15,'uso_cfdi_id'=>9]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>16,'uso_cfdi_id'=>9]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>9]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>23,'uso_cfdi_id'=>9]);

         //Usos CFDI por regimen Fiscal: I07 - COMUNICACIONES SATELITALES
         sat_regimen_uso_cfdi::insert(['regimen_id'=>1,'uso_cfdi_id'=>10]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>2,'uso_cfdi_id'=>10]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>10]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>10]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>12,'uso_cfdi_id'=>10]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>13,'uso_cfdi_id'=>10]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>14,'uso_cfdi_id'=>10]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>15,'uso_cfdi_id'=>10]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>16,'uso_cfdi_id'=>10]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>10]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>23,'uso_cfdi_id'=>10]);

         //Usos CFDI por regimen Fiscal: I08 - OTRA MAQUINARIA Y EQUIPO
         sat_regimen_uso_cfdi::insert(['regimen_id'=>1,'uso_cfdi_id'=>11]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>2,'uso_cfdi_id'=>11]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>11]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>11]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>12,'uso_cfdi_id'=>11]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>13,'uso_cfdi_id'=>11]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>14,'uso_cfdi_id'=>11]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>15,'uso_cfdi_id'=>11]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>16,'uso_cfdi_id'=>11]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>11]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>23,'uso_cfdi_id'=>11]);

         //Usos CFDI por regimen Fiscal: D01 - HONORARIOS MÉDICOS, DENTALES Y GASTOS HOSPITALARIOS
         sat_regimen_uso_cfdi::insert(['regimen_id'=>3,'uso_cfdi_id'=>12]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>12]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>5,'uso_cfdi_id'=>12]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>8,'uso_cfdi_id'=>12]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>12]);         
         sat_regimen_uso_cfdi::insert(['regimen_id'=>10,'uso_cfdi_id'=>12]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>18,'uso_cfdi_id'=>12]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>21,'uso_cfdi_id'=>12]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>12]);

         //Usos CFDI por regimen Fiscal: D02 - GASTOS MÉDICOS POR INCAPACIDAD O DISCAPACIDAD
         sat_regimen_uso_cfdi::insert(['regimen_id'=>3,'uso_cfdi_id'=>13]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>13]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>5,'uso_cfdi_id'=>13]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>8,'uso_cfdi_id'=>13]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>13]);         
         sat_regimen_uso_cfdi::insert(['regimen_id'=>10,'uso_cfdi_id'=>13]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>18,'uso_cfdi_id'=>13]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>21,'uso_cfdi_id'=>13]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>13]);

         //Usos CFDI por regimen Fiscal: D03 - Gastos Funerales
         sat_regimen_uso_cfdi::insert(['regimen_id'=>3,'uso_cfdi_id'=>14]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>14]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>5,'uso_cfdi_id'=>14]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>8,'uso_cfdi_id'=>14]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>14]);         
         sat_regimen_uso_cfdi::insert(['regimen_id'=>10,'uso_cfdi_id'=>14]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>18,'uso_cfdi_id'=>14]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>21,'uso_cfdi_id'=>14]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>14]);

         //Usos CFDI por regimen Fiscal: D04 - DONATIVOS
         sat_regimen_uso_cfdi::insert(['regimen_id'=>3,'uso_cfdi_id'=>15]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>15]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>5,'uso_cfdi_id'=>15]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>8,'uso_cfdi_id'=>15]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>15]);         
         sat_regimen_uso_cfdi::insert(['regimen_id'=>10,'uso_cfdi_id'=>15]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>18,'uso_cfdi_id'=>15]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>21,'uso_cfdi_id'=>15]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>15]);

         //Usos CFDI por regimen Fiscal: D05 - INTERESES REALES EFECTIVAMENTE PAGADOS POR CRÉDITOS HIPOTECARIOS (CASA HABITACIÓN)
         sat_regimen_uso_cfdi::insert(['regimen_id'=>3,'uso_cfdi_id'=>16]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>16]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>5,'uso_cfdi_id'=>16]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>8,'uso_cfdi_id'=>16]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>16]);         
         sat_regimen_uso_cfdi::insert(['regimen_id'=>10,'uso_cfdi_id'=>16]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>18,'uso_cfdi_id'=>16]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>21,'uso_cfdi_id'=>16]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>16]);

         //Usos CFDI por regimen Fiscal: D06 - APORTACIONES VOLUNTARIAS AL SAR.
         sat_regimen_uso_cfdi::insert(['regimen_id'=>3,'uso_cfdi_id'=>17]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>17]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>5,'uso_cfdi_id'=>17]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>8,'uso_cfdi_id'=>17]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>17]);         
         sat_regimen_uso_cfdi::insert(['regimen_id'=>10,'uso_cfdi_id'=>17]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>18,'uso_cfdi_id'=>17]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>21,'uso_cfdi_id'=>17]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>17]);

         //Usos CFDI por regimen Fiscal: D07 - PRIMAS POR SEGUROS DE GASTOS MÉDICOS.
         sat_regimen_uso_cfdi::insert(['regimen_id'=>3,'uso_cfdi_id'=>18]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>18]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>5,'uso_cfdi_id'=>18]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>8,'uso_cfdi_id'=>18]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>18]);         
         sat_regimen_uso_cfdi::insert(['regimen_id'=>10,'uso_cfdi_id'=>18]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>18,'uso_cfdi_id'=>18]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>21,'uso_cfdi_id'=>18]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>18]);

         //Usos CFDI por regimen Fiscal: D08 - GASTOS DE TRANSPORTACIÓN ESCOLAR OBLIGATORIA
         sat_regimen_uso_cfdi::insert(['regimen_id'=>3,'uso_cfdi_id'=>19]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>19]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>5,'uso_cfdi_id'=>19]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>8,'uso_cfdi_id'=>19]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>19]);         
         sat_regimen_uso_cfdi::insert(['regimen_id'=>10,'uso_cfdi_id'=>19]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>18,'uso_cfdi_id'=>19]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>21,'uso_cfdi_id'=>19]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>19]);

         //Usos CFDI por regimen Fiscal: D09 - DEPOSITOS EN CUENTAS PARA EL AHORRO, PRIMAS QUE TENGAN COMO BASE PLANES DE PENSIONES
         sat_regimen_uso_cfdi::insert(['regimen_id'=>3,'uso_cfdi_id'=>20]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>20]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>5,'uso_cfdi_id'=>20]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>8,'uso_cfdi_id'=>20]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>20]);         
         sat_regimen_uso_cfdi::insert(['regimen_id'=>10,'uso_cfdi_id'=>20]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>18,'uso_cfdi_id'=>20]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>21,'uso_cfdi_id'=>20]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>20]);

         //Usos CFDI por regimen Fiscal: D10 - PAGOS POR SERVICIOS EDUCATIVOS (COLEGIATURAS)
         sat_regimen_uso_cfdi::insert(['regimen_id'=>3,'uso_cfdi_id'=>21]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>21]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>5,'uso_cfdi_id'=>21]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>8,'uso_cfdi_id'=>21]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>21]);         
         sat_regimen_uso_cfdi::insert(['regimen_id'=>10,'uso_cfdi_id'=>21]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>18,'uso_cfdi_id'=>21]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>21,'uso_cfdi_id'=>21]);
         sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>21]);

         //Usos CFDI por regimen Fiscal: S01 - Sin Efectos Fiscales
        sat_regimen_uso_cfdi::insert(['regimen_id'=>1,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>2,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>3,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>4,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>5,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>7,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>8,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>9,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>10,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>11,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>12,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>13,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>14,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>15,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>16,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>18,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>21,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>22,'uso_cfdi_id'=>23]);
        sat_regimen_uso_cfdi::insert(['regimen_id'=>23,'uso_cfdi_id'=>23]);

        motivos_declina_solicitud::insert(['id'=>1,'motivo'=>'TICKET NO ENCONTRADO O DATOS INCORRECTOS','detalle_motivo' => 'No existe un ticket de compra con los datos propocionados o algun dato es incorrecto']);
        motivos_declina_solicitud::insert(['id'=>2,'motivo'=>'TICKET FUERA DEL PERIODO DE FACTURACIÓN','detalle_motivo' => 'El periodo para solicitar la factura de este ticket ha caducado y fue considerado dentro de una factura global de un periodo anterior']);
        motivos_declina_solicitud::insert(['id'=>3,'motivo'=>'FACTURADO PREVIAMENTE','detalle_motivo' => 'El ticket de compra ya fue utilizado para generar otra factura']);
        motivos_declina_solicitud::insert(['id'=>4,'motivo'=>'MONTO NO COINCIDE','detalle_motivo' => 'El monto que proporcionó no corresponde con nuestros registros']);
        motivos_declina_solicitud::insert(['id'=>5,'motivo'=>'ERROR EN RFC Y/O RAZON SOCIAL','detalle_motivo' => 'La Razón social y el RFC no corresponden entre sí. Esto con base en la información registrada en el SAT']);
        motivos_declina_solicitud::insert(['id'=>6,'motivo'=>'ERROR EN DIRECCIÓN FISCAL','detalle_motivo' => 'La dirección físcal (código postal) no corresponde con los datos del SAT']);
        motivos_declina_solicitud::insert(['id'=>7,'motivo'=>'ERROR EN RÉGIMEN FISCAL','detalle_motivo' => 'El régimen físcal que proporcionó no corresponde con los datos registrados ante el SAT']);
         
    }
}
