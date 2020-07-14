
<?php
    require_once'../model/ins.php';
    require_once'../model/ambiente.php';

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


?>
<script>
    alert("Ambiente eliminado correctamente");
</script>