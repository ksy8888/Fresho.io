<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8" import="java.util.ArrayList"%>
<%
	request.setCharacterEncoding("UTF-8");
%>

<!DOCTYPE html>


<head>
	<meta charset="UTF-8">
	<title>freshO(식자재)</title>
	<link rel="shortcut icon" type="image/x-icon" href="http://fresho.dothome.co.kr/main(image)/logo(finish).png" />
	<link rel ="stylesheet" type="text/css" href="/css/1.css">
	<meta property="og:locale" content="ko" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="freshO(식자재)" />
	<meta property="og:url" content="http://fresho.dothome.co.kr/" />
	<meta property="og:site_name" content="Fresho" />
	<meta property="og:image" src="/main(image)/logo(finish).png" />
	<link href="/css/1.css" rel="stylesheet" type="text/css" >
	<link href="css/slide.css" rel="stylesheet" type="text/css" >
	

</head>

<body class="cafe page">
	
		<header class="header">

					<div class="join">  
					<img id="modal_open_btn" class="join-btn" src="/main(image)/join.png" alt=""></button> 
					</div>
	
					<div id="modal">
				   
					<div class="modal_content">
						<img class="fojoin" src="/main(image)/join.png" alt=""><br />
					    <form method="post" action="join.php" enctype="multipart/form-data">
							<fieldset>
								<legend>정보를 입력해주세요.</legend>
								이름  <input type="text" name ="name"  /><br />
								전화번호 <input type="tel" name ="phone"  placeholder="010-0000-0000"><br />
								주소 <input type="text" name ="address" /><br />
								연령 <input type="number" name ="age"  /><br />
								비밀번호 <input type="password" name ="pass"  /><br />
								비밀번호 확인 <input type="password" name ="checkpass" />
								
								
						</fieldset>
						<button type="submit" id="submit_btn">가입완료</button><br />
						<p>가입한 적이 있으신 분은 로그인버튼을 눌러주세요.</p>
						<button type="button" id="login2_btn" onClick="location.href='http://fresho.dothome.co.kr/login.html'" >로그인</button>
						</form>
						
					    												
						<button type="button" id="modal_close_btn">닫기</button>       
					</div>     
					<div class="modal_layer"></div>
					</div>
					
					<script>
					
					document.getElementById("modal_open_btn").onclick = function() {
						document.getElementById("modal").style.display="block";
					}
				   
					document.getElementById("modal_close_btn").onclick = function() {
						document.getElementById("modal").style.display="none";
					}   
					
					</script>
	
			<div class="header-box">
				<div class="header-left">
					<div class="logo">
						<a href="http://fresho.dothome.co.kr">
							<img class="logo-static" src="/main(image)/logo(finish).png" alt="freshO"/>
						</a>
						
					</div>
				</div>
			</div>
			
			
				
					<div class="nav-box">
						<ul class="menu-box">
							<li><a href="http://fresho.dothome.co.kr/list.html"/>
								<img class="menu" src="/main(image)/fresh.png" alt="fresh"/></a></li>
							<li><a href="http://fresho.dothome.co.kr/cook.html"/>
								<img class="menu"  src="/main(image)/cook.png" alt="cook"/></a></li>
							<li><a href="http://fresho.dothome.co.kr/cafe.html"/>
								<img class="menu"  src="/main(image)/cafe.png" alt="cafe"/></a></li>
							<li><a href="http://fresho.dothome.co.kr/mypage.html"/>
								<img class="menu"   src="/main(image)/mypage.png" alt="mypage"/></a></li>
							<li><a href="http://fresho.dothome.co.kr/QnA.html"/>
								<img class="menu" id="check" src="/main(image)/QnA.png" alt="QnA"/></a></li>
							<li><a class="btn" href="http://fresho.dothome.co.kr/login.html" target="self"> 
								<img class="login-btn" src="/main(image)/login.png" alt="login"/></a></li></a> 
						</ul>
					</div>
				
					
			</div>
			
			
			

	</header>
	
	
	
  <div class="prod-atf">
        <ul id="breadcrumb">
	<li><a href="/" class="breadcrumb-link">쿠팡 홈</a> </li>
	
</ul>

        <div class="prod-atf-main">
            <script>
    function _logTTI(img){
        if(window.logTime) {
            logTime(img);
            window.logImageLoadTime && logImageLoadTime(img);
            // avoid invoke twice
            _logTTI = function () {
            };
        }
    }
</script>



<div class="cu">
<div class="prod-image" data-global-banner-fold="">
    <div id="repImageContainer" class="prod-image-container"
         data-global-banner-fold="">
        <div class="prod-image__items">
            
                <div class="prod-image__item prod-image__item--active">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" onerror="this.src='//t1a.coupangcdn.com/thumbnails/remote/490x490/image/coupang/common/no_img_1000_1000.png';"
                     alt="thumb image" data-src="//thumbnail6.coupangcdn.com/thumbnails/remote/48x48ex/image/vendor_inventory/0bc3/1368a0419664bc27500dc306046288b9ca62b8c5253b5a160aac899b36a8.jpg" class="lazy-load-img">
                    <i class="prod-image__item__border"></i>
                </div>
            
                <div class="prod-image__item ">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" onerror="this.src='//t1a.coupangcdn.com/thumbnails/remote/490x490/image/coupang/common/no_img_1000_1000.png';"
                     alt="thumb image" data-src="//thumbnail9.coupangcdn.com/thumbnails/remote/48x48ex/image/vendor_inventory/a256/29b4168050c9a4abd30b0616d734f82f4e6fbeb01b224f3f10b4307c4f8e.jpg" class="lazy-load-img">
                    <i class="prod-image__item__border"></i>
                </div>
            
                <div class="prod-image__item ">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" onerror="this.src='//t1a.coupangcdn.com/thumbnails/remote/490x490/image/coupang/common/no_img_1000_1000.png';"
                     alt="thumb image" data-src="//thumbnail9.coupangcdn.com/thumbnails/remote/48x48ex/image/vendor_inventory/a205/c15ccad905b6ded712c4b78ff1a1136c5dc1b96ea6ce9a682edca9a221e3.jpg" class="lazy-load-img">
                    <i class="prod-image__item__border"></i>
                </div>
            
        </div>
        <img class="prod-image__detail"
             src="//thumbnail6.coupangcdn.com/thumbnails/remote/230x230ex/image/vendor_inventory/0bc3/1368a0419664bc27500dc306046288b9ca62b8c5253b5a160aac899b36a8.jpg"
             onload="_logTTI(this)" data-tti="true"
             data-preload-img-src="//thumbnail6.coupangcdn.com/thumbnails/remote/230x230ex/image/vendor_inventory/0bc3/1368a0419664bc27500dc306046288b9ca62b8c5253b5a160aac899b36a8.jpg"
             onerror="this.src='//t1a.coupangcdn.com/thumbnails/remote/490x490/image/coupang/common/no_img_1000_1000.png';"
             alt="detail image"
        />
    </div>
    
    <div id="prodStickyBanner" class="product-sticky-banner-clickable prod-sticky-banner"></div>
</div>


<div class="prod-buy 
	
	  new-oos-style
	not-loyalty-member
	eligible-address
	
	without-subscribe-buy-type
	DISPLAY_0
	only-one-delivery
	
">
    <div class="prod-buy-blocker">
        <div class="prod-buy-blocker__bg"></div>
        <div class="prod-buy-blocker__spinner"></div>
    </div>
    <div class="prod-title-badges">

    



	<span class="prod-pre-order-badge" style="display: none">
        <span class="prod-pre-order-badge-text"></span>
	</span>


	<div class="prod-top-brand-badge-wrapper">
		
			
		
	</div>
</div>

<a href="" class="prod-brand-name" data-brand-name=""
   data-coulog='{"logCategory":"event", "logType":"click", "logLabel":"brandName", "customURL":"/click_sdp_brand_name", "extraParam":"page=SDP&type=brandSDP&contents=brandName&productId=5208244085&vendorItemId=74568989691"}'
   style="display:none;"></a>


<div class="prod-buy-header">

    <h2 class="prod-buy-header__title">21년 국내산 햇양파 3kg 5kg 10kg 20kg 최상품</h2>

    <div class="prod-buy-header__info">
        
        <span class="prod-buy-header__productreview" data-virolecode="2" id="prod-buy-header__productreview" style="display:block;">
            <a href="#sdpReview" class="moveAnchor" id="prod-review-nav-link">

                
                    <span class="rating-star-container"  style="float:left;">
                        <span class="rating-star-num" style="width: 100.0%;"></span>
                    </span>
                
              
            </a>
        </span>
    </div>

    
    


</div>


    
    <div class="prod-author"  style="display: none;">
    
</div>


    <div class="prod-price-container">
    <!-- 품절 -->
    <div class="prod-price">
        
            
<div class="prod-price-onetime">

    
    <div class="prod-origin-price " >
    
        <span class="origin-price">20,000원</span>
       
        <div class="origin-price-info-icon"></div>
    </div>

    



    
    <div class="prod-sale-price   prod-major-price" >
        <span class="total-price">
            
            

            
                <strong>7,300<span class="price-unit">원</span></strong>
            
        </span>
        
        

        
        
            
        

        
        
            
                <span class="unit-price"></span>
            
        
        
        
        
            
            
                <div class="price-badge-list">
<table class="badge-table">

	<tr class="BADGE_DISPLAY_0">
        <td class="td-delivery-badge">
            
        </td>

		

		<td class="td-icon">
            
            

						<!-- ROCKET_MERCHANT can be both rocketWow or normal rocket, so, judge it first -->
            
	              
		              
	              
            
		</td>
	</tr>

</table>
</div>


<div class="prod-pre-order-msg" style="display: none">
    <span class="prod-pre-order-msg-info">사전예약 상품</span>
    <div class="question-mark-rocket-plus"></div>
    <div class="question-mark-pre-order-popup" style="display: none;">
            <span class="question-mark-pre-order-popup__info">
                사전예약 상품은 예약 구매 후 도착<br>
                예정일에 수령하는 상품입니다.
            </span>
        <span class="question-mark-pre-order-popup-close-btn"></span>
    </div>
</div>


            
        
    </div>

    

    
    <div class="prod-coupon-price prod-major-price" style="display:none">
        <span class="total-price">
            <strong><span class="price-unit">원</strong>
        </span>

        <span class="unit-price"></span>
        

        
            <span class="price-txt-info">
                
            </span>
            
        

    </div>
    

    
    
    

    <div class="prod-cash-promotion-container">
        
    </div>

    <div class="prod-benefit-badge-wrap">
        <div class="prod-ccid-badge-container">
            

        </div>
        <div class="prod-reward-cash-badge-container">
            
<div class="reward-cash-badge">
    <div class="reward-cash-badge__inr">
        <img src="//image6.coupangcdn.com/image/badges/cashback/web/list-cash-icon@2x.png" alt="" class="reward-cash-ico">
        <span class="reward-cash-txt">최대 73원 적립</span>
    </div>
</div>


        </div>
    </div>
    <div class="prod-targeted-promotion-banner-container">
        
    


    </div>


    
    
        
            
        
    
</div>


        

    </div>




    
    
      
  <!--display logic summary-->
  
    
    
  
  
  

  <div class="prod-shipping-fee-and-pdd-wrapper apply-unknown-customer-handling" data-apply-unknown-customer-handling="B">
    <div class="prod-delivery-notice-container">
    
    </div>

    <div class="prod-shipping-fee-container" >
      
        <div class="prod-shipping-fee ">
        
        
          <div class="SHIPPING_FEE_DISPLAY_0">
            <div class="prod-shipping-fee-message">
              <span><em class='prod-txt-bold'>무료배송</em></span>
              
            </div>
            <div class="prod-shipping-consolidation">
              
            </div>
          </div>
        
          
          <div class="prod-pre-order-release-container" style="display: none;">
            <span class="prod-pre-order-release-msg"></span>
          </div>
        </div>
      </div>

    


    
    <div class="prod-pdd-container">
      

      
      <div class="prod-pdd-display-area" >
        
          
            <div class="prod-pdd single-pdd-area  PDD_DISPLAY_0 delivery-3pl ">
              <em class='prod-txt-onyx prod-txt-font-14'>모레(수) 5/12</em><em class='prod-txt-onyx'> 도착 예정</em>
              
              
              
             
            </div>
          
        
      </div>

     
    </div>

  

   
  </div>


		
	


<div class="prod-vendor-container without-coach" >

    

    
    
        
    
    

	<div class="prod-vendor with-delivery-vendor">
		
        <div class="prod-sale-vendor">
            
            
                
                판매자: <a class="prod-sale-vendor-name" href="/vp/vendors/A00303090/products?vendorName=%EC%A1%B0%EC%9D%80+%EB%A8%B9%EA%B1%B0%EB%A6%AC&amp;productId=5208244085&amp;outboundShippingPlaceId=2631669">조은 먹거리<img class="prod-seller-link-coach" src="//img1a.coupangcdn.com/image/dragonstone/sdp/new-coach-mark.png"></a>
            
        </div>
		
		<div class="prod-vendor-info">
			
			
				<div>
					택배사: <span>롯데택배</span>
				</div>
			
		</div>
    </div>
</div>

    
   

    <!--option-->



    
        
            
        
    
    <div class="prod-option  ">
        
    <div class="prod-option__item" data-attribute-type-id="8479,7652"> 
            <div>
                <div class="prod-option__selected-container">
                    <button class="prod-option__selected multiple">
                        <table>
                            <colgroup><col width="98%"><col width="1%"><col width="1%"></colgroup>
                            <tbody>
                            <tr>
                                <td>
                                    <span class="title">중량 × 수량</span>
                                    <span class="value">3kg × 햇양파 1박스</span>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <i class="dropdown-icon"></i>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </button>
                </div>
            </div>
        </div>


    </div>



    <div id="bundleOptionContainer">
    
    <div class="bundle-option-list" data-view-type="">
        
    </div>
    
</div>


	<div id="insuranceContainer"
	     class=" ">
		<!--	placeholder    -->
		



	</div>

    
    <div class="prod-ccid-detail-container" style="">



</div>


    
    
        <div class="prod-reward-cash-container">
    
    <div class="prod-reward-cash is-targeted-promotion
        
        ">


        <div class="reward-cash-promotion">

                    <button type="button" 
                            class="reward-cash-promotion__btn prod-charge-rocket-money-btn">
                        캐시 충전하기
                    </button>
         
        </div>

        <div id="cashbackMoreInfo" class="prod-modal-popup is-cashback-more-info" style="display:none">
    <div class="prod-modal-popup__header">
        <strong class="prod-modal-popup__header-title">캐시적립 혜택</strong>
        <span class="prod-modal-popup__header-close">닫기</span>
    </div>
    <div class="prod-modal-popup__contents">
        <section class="cashback-info-section" data-benefit-type="basic">
            <div class="cashback-info">
                <h2 class="cashback-info__type">기본 혜택</h2>
            </div>
            <div class="cashback-desc-list">
            
                



            
            </div>
        </section>
        
        <div class="cashback-notice">
            <p>* 캐시적립은 바로 적립됩니다.</p>
        </div>
    </div>
</div>

    </div>
    
</div>


    

    
    
        
            
                
<div class="prod-buy-type is-subscribe-info" style="display:none;">
	
</div>

            
        
    

    <!--quantity and order-->
    <div class="prod-buy-quantity-and-footer

    

     ">
    <div class="prod-buy-quantity">
        



<div class="prod-buy__quantity">
    <div class="prod-quantity__form">
        <input type="text" value="1"
               class="prod-quantity__input"  maxlength="6" autocomplete="off">
        <div style="display:table-cell;vertical-align:top;">
            <button class="prod-quantity__plus" type="button" >수량빼기</button>
            <button class="prod-quantity__minus" type="button" disabled="disabled">수량더하기</button>
        </div>
    </div>
</div>

    </div>
    <div class="prod-buy-footer ">
        <div class="prod-order-data" style="display:none;"
             data-carturl="//cart.coupang.com/cartView.pang"
             data-orderurl="/createCheckout.pang"
             data-categorylinkcode=""
        ></div>
        <div class="prod-onetime-order " style="">
		
		<%    
		ArrayList<String> list = new ArrayList<String>(); 
		session.setAttribute("sub",list);
		%>
		 <form action="add.jsp" method="post">
            <select name="sub"> 
                <option value="onion">양파</option>               
            </select> <input type="submit" value="추가">
			<a href="checkout.jsp"><font color="blue" size="10">계산</font>
		 </form> 
		
            <button class="prod-cart-btn"
                    data-gaclick='{"hitType":"event", "eventCategory":"addCartButton", "eventAction":"click", "eventLabel":"optionBarButton", "eventValue":0}'>
                장바구니 담기
            </button>
            <button class="prod-buy-btn"
                    data-gaclick='{"hitType":"event", "eventCategory":"orderButton", "eventAction":"click", "eventLabel":"buy_optionBarButton", "eventValue":0}'>
                <span class="prod-buy-btn__txt">바로구매</span>
            </button>
        </div>

        

        <div class="prod-buy-quantity-and-footer__oos-or-unavailable" style="display: none;">
            품절
        </div>

        <div class="prod-subscribe-order">
            <button class="prod-subscription-buy prod-subscription-cart-btn">
                <span class="prod-buy-btn__txt">정기배송 장바구니 담기</span>
            </button>
        </div>

        <div class="prod-loyalty-register-order" style="display: none;">
        
            <button class="prod-loyalty-register-btn"
                    data-loyalty-landing-url=""
                    data-benefit-type=""
                    id="loyaltyRegisterOrderButton">
                <!-- text is different for different loyalty nudge -->
                    
	                    
		                    <span class="prod-buy-btn__txt"></span>
	                    
                    
            </button>
        
        </div>

        <div class="prod-loyalty-register-subscribe-order" style="display: none;">
        
            <button class="prod-loyalty-register-btn"
                    data-loyalty-landing-url=""
                    id="loyaltyRegisterSubscribeOrderButton">
                    <span class="prod-buy-btn__txt"></span>
            </button>
        
        </div>

        <div class="prod-pre-order" style="display: none">
            <button class="prod-pre-order-btn">
                <span class="prod-buy-btn__txt"></span>
            </button>
        </div>
    </div>
    <div class="prod-buy-quantity-and-footer__mask" ></div>
</div>

    <!--buy box winner-->
    
    <!--description-->
    <div class="prod-description">
    <ul class="prod-description-attribute">
       
        <li class="prod-attr-item" style="display: list-item;">원산지: 국내산</li>
       
        <li class="prod-attr-item" style="display: list-item;">쿠팡상품번호: 5208244085 - 7277660327</li>
       
    </ul>
</div>

    <!--coupick - coupang choice-->
    <div class="prod-coupick"></div>
    <!--vfp-->
    <div class="prod-vfp-banner impression-log impression-log-reload" style="display: none;"
     data-impression-event-name="vfpbanner"></div>

	
    


</div>

        </div>
    </div>
		
</div>		
	</body>

</html>	
