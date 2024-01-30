<div class="row mb ">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner mb">
                                                <!-- Slideshow container -->
                            <div class="slideshow-container">

                            <!-- Full-width images with number and caption text -->
                            <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="view/image/anh1.jpg" style="width:100%">
                            <div class="text">Caption Text</div>
                            </div>

                            <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="view/image/anh2.jpg" style="width:100%">
                            <div class="text">Caption Two</div>
                            </div>

                            <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="view/image/anh4.jpg" style="width:100%">
                            <div class="text">Caption Three</div>
                            </div>

                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            </div>
                            <br>

                            <!-- The dots/circles -->
                            <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <?php 
                    $i=0;
                        foreach ($spnew as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$img;
                            if(($i==2)||($i==5)||($i==8)){
                                $mr="";
                            }else{
                                $mr="mr";
                            }
                            echo '<div class="boxsp '.$mr.'">
                                <div class="row img"> <a href="'.$linksp.'"> <img src="'. $hinh.'" alt=""></a></div>      
                                <p>'.$price.'</p>
                                <a href="'.$linksp.'">'.$name.'</a>
                            </div>';
                            $i+=1;
                        }
                    
                    
                    ?>
                    <!-- <div class="boxsp mr">
                        <div class="row img"> <img src="view/image/10870.png" alt=""></div>      
                        <p>$30</p>
                        <a href="#">Đồng Hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"> <img src="view/image/1067.jpg" alt=""></div>      
                        <p>$30</p>
                        <a href="#">Đồng Hồ</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img"> <img src="view/image/1076.jpg" alt=""></div>      
                        <p>$30</p>
                        <a href="#">Đồng Hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"> <img src="view/image/1085.jpg" alt=""></div>      
                        <p>$30</p>
                        <a href="#">Đồng Hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"> <img src="view/image/1084.jpg" alt=""></div>      
                        <p>$30</p>
                        <a href="#">Đồng Hồ</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img"> <img src="view/image/1067.jpg" alt=""></div>      
                        <p>$30</p>
                        <a href="#">Đồng Hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"> <img src="view/image/1055.jpg" alt=""></div>      
                        <p>$30</p>
                        <a href="#">Đồng Hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"> <img src="view/image/1050.jpg" alt=""></div>      
                        <p>$30</p>
                        <a href="#">Đồng Hồ</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img"> <img src="view/image/1056.jpg" alt=""></div>      
                        <p>$30</p>
                        <a href="#">Đồng Hồ</a>
                    </div> -->
                    
                </div>
            </div>
            <div class="boxphai">
                <?php
                    include "boxright.php";              
                ?>
            </div>
        </div>