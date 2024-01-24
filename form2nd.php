<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form handling</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <div>
    <p>FORM</p>
    <form action="datasent.php" method="post">
        <fieldset>
            <legend>Basic details</legend>
            <label for="name">Product_Name:</label>
            <input type="text" id="name" name="nam[Product_name:]">&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="psku">SKU:</label>
            <input type="text" id="psku" name="nam[SKU:]"><br><br>
            <label for="ptype">Product_type:</label><br>
            <input type="radio" id="stype" name="nam[Product_type:]" value="Simple">
            <label for="stype">Simple</label>
            <input type="radio" id="btype" name="nam[Product_type:]" value="Bundle">
            <label for="btype">Bundle</label><br><br>
            <label for="category">Category</label>
            <select id="category" name="nam[Category]" >
                <option value="Bar&Game Room">Bar&Game Room
                </option>
                <option value="Bedroom">Bedroom
                </option>
                <option value="Decor"> Decor
                </option>
                <option value="Dining&Kitchen">Dining&Kitchen
                </option>
                <option value="Lighting">Lighting
                </option>
                <option value="LivingRoom">LivingRoom
                </option>
                <option value="Mattresses">Mattresses
                </option>
                <option value="Office">Office
                </option>
                <option value="Outdoor">Outdoor
                </option>
            </select> &nbsp; &nbsp;
            <label for="status">Status</label>
            <select id="status" name="nam[Status]">
                <option value="Enabled">Enabled
                </option>
                <option value="Disabled">Disabled
                </option>
            </select>
        </fieldset>
        <fieldset>
            <legend>Costs</legend>
            <label for="mcost">Manufacturer_Cost:</label>
            <input type="text" id="mcost" name="nam[Manufacturer_cost:]">&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="scost">Shipping_Cost:</label>
            <input type="text" id="scost" name="nam[Shipping_Cost:]"><br><br>
            <label for="tcost">Total_Cost(item):</label>
            <input type="text" id="tcost" name="nam[Total_Cost(item):]">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="pcost">Price</label>
            <input type="text" id="pcost" name="nam[Price]">
        </fieldset>
        <fieldset>
            <legend>Dates</legend>
            <label for="cdate">Created_At</label>
            <input type="date" id="cdate" name="nam[Created_At]"><br>
            <label for="udate">Updated_At</label>
            <input type="date" id="udate" name="nam[Updated_At]"><br>
        </fieldset>
        <button type="submit">Submit </button>
    </form>
    </div>
</body>

</html>