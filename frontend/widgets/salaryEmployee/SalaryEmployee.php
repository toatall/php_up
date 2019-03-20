<?php
namespace frontend\widgets\salaryEmployee;

use yii\base\Widget;
use frontend\models\Employee;
/**
 * Description of SalaryEmployee
 *
 * @author Oleg
 */
class SalaryEmployee extends Widget
{
    
    public $maxEmployee = 10;
    
    public function run()
    {
        $model = new Employee();        
        $result = $model->topSalary($this->maxEmployee);
        return $this->render('index', ['model'=>$result]);        
    }
}
