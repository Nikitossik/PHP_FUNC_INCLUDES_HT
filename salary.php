<?php 

    // 7.4 Зарплата

    function junior_salary($money, $seniority) {
        return $money + $money  * $seniority * 0.3;
    }
    
    function middle_salary($money, $seniority) {
        return $money + $money  * $seniority * 0.6;
    }

    function senior_salary($money, $seniority) {
        return $money + $money  * $seniority * 0.9;
    }
    
    function paySalary($salary = null) {
        $money = 1000;
        $seniority = 3;
        if (isset($salary)) $money = call_user_func($salary, $money, $seniority);
        return $money;
    }

    echo "Salary: ".paySalary()."\n";
    echo "Junior salary: ".paySalary("junior_salary")."\n";
    echo "Middle salary: ".paySalary("middle_salary")."\n";
    echo "Senior salary: ".paySalary("senior_salary")."\n";

?>