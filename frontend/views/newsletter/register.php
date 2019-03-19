<?php
    /**
     * @var $model frontend\models\Employee
     */
?>

<h1>Wellcome to our company!</h1>

<form method="post">
    <p>First name:</p>
    <input name="firstName" type="text" />
    <br /><br />
    
    <p>Last name:</p>
    <input name="lastName" type="text" />
    <br /><br />
    
    <p>Middle name:</p>
    <input name="middleName" type="text" />
    <br /><br />
    
    <p>Email:</p>
    <input name="email" type="text" />
    <br /><br />
    
    <p>City:</p>
    <select name="city">
        <option value="1">Moscow</option>
        <option value="2">New-Yourk</option>
        <option value="3">Dallas</option>
    </select>
    
    <p>Date birthday:</p>
    <input name="date_birthday" type="text" />
    <br /><br />
    
    <p>Date start work:</p>
    <input name="date_start_work" type="text" />
    <br /><br />
    
    <p>Position:</p>
    <input name="position" type="text" />
    <br /><br />
    
    <p>ID code:</p>
    <input name="id_code" type="text" />
    <br /><br />
    
    <input type="submit" />
    
</form>