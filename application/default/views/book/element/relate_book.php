<?php
$xhtmlRelate = '';
if (!empty($this->listItemsRelate)) {
    $xhtmlRelate .= '<div class="row search-product">';
    foreach ($this->listItemsRelate as $item) {

        $idNewR             = $item['book_id'];
        $nameNewRURL        = URL::filterURL($item['book_name']);
        $catNameNewRURL     = URL::filterURL($item['category_name']);
        $img = UPLOAD_BOOK_URL . $item['picture'];
        $hrefModalView  = URL::createLink($this->arrParam['module'], $this->arrParam['controller'], 'ajaxLoadInfo', ['id' => $idNewR]);
        $linkInfoItem   = URL::createLink($this->arrParam['module'], 'book', 'item', ['bid' => $idNewR], "$catNameNewRURL/$nameNewRURL-$idNewR.html");
        $addCartRelate        = 'javascript:addCart(\'' . $idNewR . '\', \'' . $item['price_discount'] . '\')';
        $percentSaleOff = $priceAfterDiscount = '';
        if ($item['sale_off'] != 0) {
            $percentSaleOff         = '<div class="lable-block">
                                <span class="lable4 badge badge-danger"> -' . $item['sale_off'] . '%</span>
                            </div>';
            $priceAfterDiscount     = '<del>' . HelperFrontend::currencyVND($item['price']) . '&#8363</del>';
        }

        $xhtmlRelate .= '<div class="col">
            <div class="product-box">
                <div class="img-wrapper">
                    ' . $percentSaleOff . '
                    <div class="front">
                        <a href="' . $linkInfoItem . '">
                            <img src="' . $img . '" class="img-fluid blur-up lazyload bg-img" alt="book_image">
                        </a>
                    </div>
                    <div class="cart-info cart-wrap">
                        <a href="' . $addCartRelate . '" title="Add to cart"><i class="ti-shopping-cart"></i></a>
                        <a href="javascript:loadModal(\'' . $hrefModalView . '\', \'' . UPLOAD_BOOK_URL . '\')" title="Quick View"><i class="ti-search"></i></a>
                    </div>
                </div>
                <div class="product-detail">
                <!-- 
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                -->
                    <a href="' . $linkInfoItem . '">
                        <h6>' . $item['book_name'] . '</h6>
                    </a>
                    <h4 class="text-lowercase">' . HelperFrontend::currencyVND($item['price_discount']) . ' &#8363 ' . $priceAfterDiscount . '</h4>
                </div>
            </div>
        </div>';
    }
    $xhtmlRelate .= '</div>';
} else {
    $xhtmlRelate = '<p class="h5 font-weight-bold text-muted text-center">Sách đang được cập nhật !</p>';
}
?>

<div class="row">
    <section class="section-b-space j-box ratio_asos pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 product-related">
                    <h2>Sản phẩm liên quan</h2>
                </div>
            </div>

            <?= $xhtmlRelate ?>
        </div>
    </section>
</div>