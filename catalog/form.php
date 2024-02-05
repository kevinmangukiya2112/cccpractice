<?php
include ('functions.php');
include ('object.php');
$id=isset($_GET['id']) ? $_GET['id']:0;
    ?>
    <html>
    <body>
        <form action="update.php?id=<?php echo $id;?>" method="POST">
            <table border="0" align="center" style="background-color:lightgrey; border-collapse: separate;
        border-spacing: 2em 1em;">
            <?php
       
            $obj=new func();
            $sql=$obj->select("ccc_practice","*",['where'=>['id'=>$id],'order_by'=>[],'limit'=>[]]);
            $obj2=new query_execute();
            $row=$obj2->select($sql);
            
            if(empty($row)){
                $newObj=new Data_Object($row);
            }
            else{
                $newObj=new Data_Object($row[0]);
            }
            

            
            ?>
             <input type="text" name="product[id]" value="<?php echo $newObj->getid($id)?>" hidden>
                <tr>
                    <td>product name</td>
                    <td><input type="text" name="product[p_name]" value="<?php echo $newObj->getp_name("")?>"></td>
                </tr>
                <tr>
                    <td>sku</td>
                    <td><input type="text" name="product[sku]" value="<?php echo $newObj->getsku("")?>"></td>
                </tr>
                <tr>
                    <td>product type</td>
                    <td><input type="radio" name="product[p_type]" value="simple" <?php if ($newObj->getp_type("simple") == 'simple') echo 'checked="checked"'; ?>>simple 
                    <input type="radio" name="product[p_type]" value="bundle" <?php if ($newObj->getp_type("simple") == 'bundle') echo 'checked="checked"'; ?>>bundle</td>
                </tr>
                <tr>
                    <td>category</td>
                    <td><select name="product[category]">
                        <option value="bar_&_game_room" <?php if($newObj->getcategory("bar_&_game_room") == "bar_&_game_room") echo "selected";?>>bar & game room</option>
                        <option value="bedroom" <?php if($newObj->getcategory("bar_&_game_room") == "bedroom") echo "selected";?>>bedroom</option>
                        <option value="decor" <?php if($newObj->getcategory("bar_&_game_room") == "decor") echo "selected";?>>decor</option>
                        <option value="dining_&_kitchen" <?php if($newObj->getcategory("bar_&_game_room") == "dining_&_kitchen") echo "selected";?>>dining & kitchen</option>
                        <option value="lighting" <?php if($newObj->getcategory("bar_&_game_room") == "lighting") echo "selected";?>>Lighting</option>
                        <option value="living_room" <?php if($newObj->getcategory("bar_&_game_room") == "living_room") echo "selected";?>>living room</option>
                        <option value="mattresses" <?php if($newObj->getcategory("bar_&_game_room") == "mattresses") echo "selected";?>>mattresses</option>
                        <option value="office" <?php if($newObj->getcategory("bar_&_game_room") == "office") echo "selected";?>>office</option>
                        <option value="outdoor" <?php if($newObj->getcategory("bar_&_game_room") == "outdoor") echo "selected";?>>outdoor</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>manufacturer cost</td>
                    <td><input type="number" name="product[m_cost]" value="<?php echo $newObj->getm_cost(0)?>"></td>
                </tr>
                <tr>
                    <td>shipping cost</td>
                    <td><input type="number" name="product[s_cost]" value="<?php echo $newObj->gets_cost(0)?>"></td>
                </tr>
                <tr>
                    <td>total cost</td>
                    <td><input type="number" name="product[t_cost]" value="<?php echo $newObj->gett_cost(0)?>"></td>
                </tr>
                <tr>
                    <td>price</td>
                    <td><input type="number" name="product[price]" value="<?php echo $newObj->getprice(0)?>"></td>
                </tr>
                <tr>
                    <td>status</td>
                    <td><select name="product[status]">
                        <option value="enabled"<?php if($newObj->getstatus("enabled") == "enabled") echo "selected";?>>enable</option>
                        <option value="disabled"<?php if($newObj->getstatus("enabled") == "disabled") echo "selected";?>>disabled</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>created date</td><td>
                    <input type="date" name="product[c_date]" value="<?php echo $newObj->getc_date(00-00-0000);?>"></td>
                </tr>
                <tr><td>updated date</td><td>
                    <input type="date" name="product[u_date]" value="<?php echo $newObj->getu_date(0-00-0000);?>"></td></tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" style="background-color:lightgreen"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
    

  

?>