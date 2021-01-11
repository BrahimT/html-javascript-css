<?php include 'header.php'; 
date_default_timezone_set("America/New_York");

?>
<?php  include 'menuItem.php';

$noOfItems = 6;
$menuItemarray =  Array($noOfItems);
$i =0;
while($i<$noOfItems){

    if ($i%2==0) {
        $menuItemarray[$i] = new menuItem ("The WP Burger ","Freshly made all-beef patty served up with homefries -","$14");
        # code...
    }
    else{
       $menuItemarray[$i] = new menuItem("WP Kebobs ", "Tender cuts of beef and chicken, served with your choice of side -"," $17");
    }
    $i++;
}

?>

           
			<!--header.php ends-->
        <div id="content" class="clearfix">
                <aside>
                        <h2><?php echo date("l") . "'s"; ?> Specials</h2>
                        <hr>
                        <?php 
                        $Stars = '';

                        for($C=0; $C<$noOfItems; $C++){
                            $Stars =  $Stars . '*';
                            if ($C%2==0) {

                            echo  '<img src="images/burger_small.jpg" alt="Burger" title="' . date("l") . " #" . ($C+1) . ' Special - Burger"/>';
                            echo '<h3>' . $menuItemarray[$C]->getMenuItem() . " " . $Stars. ($C+1) .'</h3>' . '<p>' . $menuItemarray[$C]->getDescription() . $menuItemarray[$C]->getPrice() . '</p>';
                            }else {
                                echo '<img src="images/kebobs.jpg" alt="Kebobs" title="' . date("l") . " #" . ($C+1) . ' WP Kebobs">';
                                echo '<h3>'. $menuItemarray[$C]->getMenuItem() . " " . $Stars. ($C+1) . '</h3>' . '<p>' .  $menuItemarray[$C]->getDescription() . $menuItemarray[$C]->getPrice() . '</p>';
                            
                            }

                        }
                        ?>
                </aside>
                <div class="main">
                    <h1>Welcome</h1>
                    <img src="images/dining_room.jpg" alt="Dining Room" title="The WP Eatery Dining Room" class="content_pic">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <h2>Book your Christmas Party!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div><!-- End Main -->
            </div><!-- End Content -->
         
     <?php include 'footer.php'; ?>