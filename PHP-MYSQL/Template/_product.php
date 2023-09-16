<?php

$item_id=$_GET['item_id']??1;
foreach ($product->getData() as $item):
    if($item['item_id']==$item_id):

// request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['add_submit'])) {

        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>

<section id="product"class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <img src="<?php echo $item['item_image'] ?? './assets/products/4.png' ?>" alt="product" class="img-fluid" style="width: 100%;">
                    <div class="form-row pt-4 font-size-16 font-baloo">
                        <div class="col">
                            <button type="submit" class="btn btn-danger form-control">Proceed to buy</button>
                        </div>
                        <div class="col">
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id']?? '1'?>">
                            <input type="hidden" name="user_id" value="<?php echo 1 ?>">
                            <?php
                            if(in_array($item['item_id'],$Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" class="btn btn-success font-size-16 form-control">In the cart</button>';
                            }else{
                                echo '<button type="submit" name="add_submit" class="btn btn-warning font-size-16 form-control">Add to cart</button>';
                            }
                            ?>

                        </form>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 py-5">
                    <h5 class="font-baloo font-size-20"><?php echo $item['item_name']?? 'unknown' ?></h5>
                    <small>by <?php echo $item['item_brand']?? 'Brand' ?></small>
                    <div class="d-flex">
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                          <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answere questions</a>
                    </div>
                    <hr class="mt-0">
                    <!-- Product price -->
                    <table class="my-3">
                        <tr class="font-rale font-size-14">
                            <td>M.R.P:</td>
                            <td><strike>$162.00</strike></td>
                        </tr>
                        <tr class="font-rale font-size-14">
                            <td>Deal Price:</td>
                            <td class="font-size-20 text-danger">$ <span><?php echo $item['item_price']?? 0 ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive off all taxes</small></td>
                        </tr>
                        <tr class="font-rale font-size-14">
                            <td>You Save:</td>
                            <td >$ <span class="font-size-16 text-danger">162.00</span></td>
                        </tr>
                    </table>
                    <!-- !Product price -->

                    <!-- Policy -->
                      <div id="policy">
                        <div class="d-flex">
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-retweet border py-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-rale font-size-12">10 Days<br>Replecement</a>
                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-truck border py-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-rale font-size-12">Daily Tuition<br>Deliverd</a>
                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-check-double border py-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-rale font-size-12">1 Year<br>Waranty</a>
                            </div>
                        </div>
                      </div>
                    <!-- !Policy -->
                    <hr>
                    <!-- Order-details -->
                    <div id="order-details" class="font-rale d-flex flex-column text-dark">
                        <small>Delivery by: Mar 29 - Apr</small>
                        <small>Sold by<a href="#">Daily Electronics</a>(4.5 out of 5| 18,198 ratings)</small>
                        <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer-424201</small>
                    </div>
                    <!-- !Order-details -->

                    <div class="row">
                        <div class="col-6">
                            <!-- color -->
                            <div class="color my-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-baloo">Color: </h6>
                                    <div class="p-2 color-yellow-bg rounded-circle">
                                        <button class="btn font-size-14"></button>
                                    </div>
                                    <div class="p-2 color-primary-bg rounded-circle">
                                        <button class="btn font-size-14"></button>
                                    </div>
                                    <div class="p-2 color-second-bg rounded-circle">
                                        <button class="btn font-size-14"></button>
                                    </div>
                                </div>
                            </div>
                            <!-- !color -->
                        </div>
                        <div class="col-6">
                            <!-- product Qty section -->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty-input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                            <!-- !product Qty section -->

                    </div>
                    </div>
                    <!-- size -->
                    <div class="size my-3">
                        <h6 class="font-baloo">Size:</h6>
                        <div class="d-flex justify-content-between w-75">
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14">4GB RAM</button>
                            </div>
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14">6GB RAM</button>
                            </div>
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14">8GB RAM</button>
                            </div>
                        </div>
                    </div>
                    <!-- !size -->
                </div>
                <div class="col-12">
                    <h6 class="font-rubik">Product Description</h6>
                    <hr>
                    <p class="font-rale font-size-14">iPhone 14 Pro Max với vi xử lý A16 Bionic mới sử dụng quy trình 4nm được Apple tuyên bố rằng CPU 6 nhân của nó nhanh hơn tới 40% so với các đối thủ. Bên cạnh đó, phần cứng này cũng tích hợp thêm một GPU 5 lõi góp phần tăng tốc băng thông bộ nhớ nhiều hơn 50%.</p>
                    <p class="font-rale font-size-14">iPhone 14 Pro Max với vi xử lý A16 Bionic mới sử dụng quy trình 4nm được Apple tuyên bố rằng CPU 6 nhân của nó nhanh hơn tới 40% so với các đối thủ. Bên cạnh đó, phần cứng này cũng tích hợp thêm một GPU 5 lõi góp phần tăng tốc băng thông bộ nhớ nhiều hơn 50%.</p>

                </div>
            </div>
        </div>
       </section>

<?php
    endif;
    endforeach;
?>