<?php
namespace evt\V1\Rest\VistaEstadoCiudad;
 
use Zend\Db\Adapter\AdapterInterface;
use Zend\Paginator\Adapter\ArrayAdapter;
 
class VistaEstadoCiudadMapper
{
    protected $adapter;
    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }
    public function fetchAll($params)
    {
        $estado_id = $params['estado_id'];
        $sql = 'SELECT * FROM lugar_ciudad WHERE estado_id = ? ';
        $resultset = $this->adapter->query($sql, array($estado_id));
        $returnArray = array();

        foreach ($resultset as $result) {
            echo json_encode($result);
            $returnArray[] = $result;
        }
        $adapter = new ArrayAdapter(($returnArray));

        $collection = new VistaEstadoCiudadCollection($adapter);
        return $collection;
    }
}