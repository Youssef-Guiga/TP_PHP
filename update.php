        <?php
        include ("connection.php");
        $id=$_POST['id'];
        $name=$_POST['name'];
        $price=$_POST['price'];
        $image=$_POST['image'];

        $updateinfo=array();
        if(!empty($name)){
            $updateinfo[]="name=:name";}
            if(!empty($price)){
                $updateinfo[]="price=:price";}
                if(!empty($image)){
                    $updateinfo[]="image=:image";
        }
        $db="UPDATE products SET ". implode(",",$updateinfo) . " WHERE id=:id";
        $statement=$conn->prepare($db);
        $statement->bindParam(':id', $id);
        if (!empty($name)) {
                $statement->bindParam(':name', $name);}
            if (!empty($price)) {
            $statement->bindParam(':price', $price);}
                if (!empty($image)) {
            $statement->bindParam(':image', $image);
        }
        try {
            $statement->execute();
            echo "Product updated successfully";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn=null;
        ?>