<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <div class="ticket-wrapper">
                <div class="booking-bg">
                    <div class="row">
                        <div class="col-md-12">
                            <section ng-show="select-ticket" class="booking-ticket">
                                <h2 id="choose-ticket-food" class="booking-title">Chọn vé/thức ăn</h2>
                                <div class="table-responsive">
                                    <table class="booking-ticket-table">
                                        <thead>
                                            <tr>
                                                <th>Loại vé</th>
                                                <th>Số lượng</th>
                                                <th>Giá (VNĐ)</th>
                                                <th>Tổng (VNĐ)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="item in items">
                                                <td>
                                                    <p>
                                                        <b class="ng-binding">Người lớn</b>
                                                    </p>
                                                    <p class="des-corn ng-binding">Vé 2D</p>
                                                </td>
                                                <td>
                                                    <div class="input-group input-booking">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-addminus minus-btn">
                                                                <span><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                                            </button>
                                                        </span>
                                                        <input style="width: 60px" type="number" class="input-number">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-addminus plus-btn">
                                                                <span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                                            </button>
                                                        </span>
                                                    </div>

                                                </td>
                                                <td>a</td>
                                                <td>b</td>
                                            </tr>
                                            <!-- <tr ng-repeat="item in items" class="ng-scope">
                                                <td>Ghế đôi</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr> -->
                                        </tbody>
                                        <tr class="total">
                                            <td colspan="3" class="ng-binding">Tổng</td>
                                            <td class="ng-binding">0</td>
                                        </tr>
                                    </table>

                                    <table class="booking-ticket-table">
                                        <thead>
                                            <tr>
                                                <th>Combo</th>
                                                <th>Số lượng</th>
                                                <th>Giá (VNĐ)</th>
                                                <th>Tổng (VNĐ)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <tr ng-repeat="item in items" class="ng-scope">
                                                <td>
                                                    <div class="food-item row">
                                                        <div class="img-food-item col-md-3">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="name-food-item col-md-9">
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group input-booking">
                                                        <span class="input-group-btn">
                                                            <button type="button" ng-disabled="item.defaultQuantity==0" class="btn btn-addminus" ng-click="addSeat($index,false)" disabled="disabled">
                                                                <span><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                                            </button>
                                                        </span>
                                                        <input style="width: 60px" type="text">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-addminus" ng-disabled="item.defaultQuantity==maxSeat" ng-click="addSeat($index,true)">
                                                                <span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                                            </button>
                                                        </span>
                                                    </div>

                                                </td>
                                                <td>a</td>
                                                <td>b</td>
                                            </tr> -->
                                            <?php
                                            while ($food = mysqli_fetch_array($data["inforFood"])) {
                                            ?>
                                                <tr ng-repeat="item in items" class="ng-scope">
                                                    <td>
                                                        <img src="<?php echo $data['url'] ?>public/images/food/<?php echo $food["image_food"] ?>" alt="">
                                                        <div class="des-item">
                                                            <p><b class="ng-binding"><?php echo $food["name_food"] ?></b></p>
                                                            <p class="des-corn ng-binding"><?php echo $food["detail"] ?></p>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <div class="input-group input-booking">
                                                            <span class="input-group-btn">
                                                                <button type="button" name="minus-btn" ng-disabled="item.defaultQuantity==0" class="btn minus-btn btn-addminus">
                                                                    <span><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                                                </button>
                                                            </span>
                                                            <input class="input-number" name="input-number" style="width: 60px" type="number">
                                                            <span class="input-group-btn">
                                                                <button type="button" class="btn plus-btn btn-addminus">
                                                                    <span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input class="input-price" id="input-price" name="input-price" value="<?php echo $food["price_food"]?>" style="width: 60px;border:none; background:transparent" disabled type="text" >
                                                    </td>
                                                    <td><input type="text" class="item-total" name="item-total" value="" style="width: 60px;border:none; background:transparent" disabled></td>
                                                <?php
                                            }
                                                ?>
                                                <!-- <tr ng-repeat="item in items" class="ng-scope">
                                                <td>Ghế đôi</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr> -->
                                        </tbody>
                                        <tr class="total">
                                            <td colspan="3" class="ng-binding">Tổng</td>
                                            <td class="ng-binding">
                                            <input type="text" class="total-money-buy" name="total_money_buy">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </section>
                            <section ng-show="select-seat" class="booking-ticket">
                            </section>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="ticket-header">
                <section class="ticket-feature">
                    <article class="row">
                        <div style="text-align: center;" class="col-md-12">
                            <img src="<?php echo $data['url'] ?>public/images/<?php echo $data["inforMovie"]["image_movie"] ?>" alt="">
                        </div>
                        <div class="col-md-12">
                            <div class="ticket-detail">
                                <h2 class="ticket-title upper-text" align="center"><?php echo $data["inforMovie"]["name_movie"] ?></h2>
                                <div class="ticket-icon"><span><i class="icon-<?php echo $data["inforMovie"]["notice"] ?>"></i><span class="notice">(*) Phim chỉ dành cho khán giả từ 18 tuổi trở lên</span></span></div>
                                <div class="ticket-info">
                                    <p><b>Rạp: &nbsp;</b><?php echo $data["nameRoom"] ?>&nbsp; | RAP 1&nbsp;</p>
                                    <!--p-->
                                    <!--  b #{i18n("Ngày")}: &nbsp-->
                                    <!--  | #{sessionInfo.dayOfWeekLabel}, #{sessionInfo.showDate}-->

                                    <?php
                                    $date = getdate($data["time_movie"])
                                    ?>
                                    <p><b>Suất chiếu: &nbsp;</b><?php echo $data["time_movie"] ?>&nbsp; | <?php echo $date["weekday"] ?>, <?php echo $data["date_movie"] ?></p>
                                    <p class="ng-binding"><b>Combo: &nbsp;</b></p>
                                    <p class="ng-binding"><b>Ghế: &nbsp;</b></p>
                                </div>
                                <div class="ticket-price-total">
                                    <p>Tổng: &nbsp;<galaxy-summary-ticket ng-model="tickets" ng-concession="concessions" class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-not-empty"><span class="ng-binding">0 VNĐ</span></galaxy-summary-ticket>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
</div>