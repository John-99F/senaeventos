
<?php
    require_once'../model/ins.php';
    require_once'../model/ambiente.php';
    require_once'../model/eventosF.php';
    /*PROVISIONAL*/

/*SECCION DE DIRECCIONAMIENTO DE INSTRUCTOR
----------------------------------------------------------------------*/

    if (isset($_POST['ins'])) 
    {    
        switch ($_POST['ins']) 
        {
            case 'create': 
                $ins1 = new Ins(Ins::arrayIns());
                $ins1->create(); 
                break;

            case 'update':
                $ins2 = new Ins(Ins::arrayIns());
                $ins2->modifyIns($_POST['idAntes']);
                break;

            case 'delete':
                Ins::delete($_POST['index']);
                break;
            
            default:
                echo "errorControl";
                break;
        }
    }

/*SECCION DE DIRECCIONAMIENTO DE FICHA
----------------------------------------------------------------------*/

if (isset($_POST['ambiente'])) 
{    
    switch ($_POST['ambiente']) 
    {
        case 'create': 
            $amb1 = new Ambiente(Ambiente::arrayAmbiente());
            $amb1->create(); 
            break;

        case 'update':
            $amb2 = new Ambiente(Ambiente::arrayAmbiente());
            $amb2->modifyAmbiente($_POST['idAntes']);
            break;

        case 'delete':
            Ambiente::delete($_POST['index']);
            break;
        
        default:
            echo "errorControl";
            break;
    }
}
/* SECCION DE DIRECCIONAMIENTO FICHA 
-----------------------------------------------------------------------*/

if(isset($_POST['eventos']))
{

    switch ($_POST['eventos']) 
    {
        case 'AgregarHorario':
                $eve1= new Eventos(Eventos::arrayeventos());
                $eve1->AgregarHorario();
            break;

        case 'ActualizarEventos' 
                $eve2= new Eventos(Eventos::arrayeventos());
                $eve2->ActualizarEventos($_POST['idAntes']);
            break;
        
        case 'EliminaEventos'
                Eventos::eliminar($_POST['id']);
            break;

        default:
                echo "Error : no Direcciono";
            break;
    }
}

/* DIRECCIONAMIENTO FICHA 
---------------------------------------------------------------------*/
if(isset($_POST['ficha']))
{

    switch ($_POST['ficha']) 
    {
        case 'Agregar':
                $fic1= new Ficha(Ficha::arrayficha());
                $fic1->AgregarFicha();
            break;

        case 'Actualizar' 
                $fic2= new Ficha(Ficha::arrayficha());
                $fic2->ActualizarFicha($_POST['idAntes']);
            break;
        
        case 'Eliminar'
                Ficha::eliminar($_POST['id']);
            break;

        default:
                echo "Error : no Direcciono";
            break;
    }
}



?>
