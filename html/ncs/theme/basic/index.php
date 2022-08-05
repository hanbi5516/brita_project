<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>



<div id="hanbi">
    <div id="bn">
         <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide bn1"></div>
                <div class="swiper-slide bn2"></div>
                <div class="swiper-slide bn3"></div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

    <div id="bnbottom">
        <div class="product">
            <h4>제품등록</h4>
        </div>
        <div>
            <ul>
                <li><a href="">제품코드를 적어주세요.<i class="fad fa-search"></i></a></li>
                <li><a href="">제품명을 적어주세요.<i class="fad fa-search"></i></a></li>
            </ul>
        </div>
    </div>


    <section id="Asec" class="container">
        <h3>브리타 효과</h3> 
        
        <div class="effect  d-lg-flex  justify-content-between">
            <div class="youtubeBox col-lg-6">
                <div>
                    <iframe
                    width="100%"  src="https://www.youtube.com/embed/_GFqZ4jwgRA?start=3?autoplay=1&mute=1"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                    </iframe>
                </div>
           </div>
            <div class="britaeffect text-center text-lg-left  col-lg-5  mt-4 mt-lg-0">
                <h4>안전, 위생, 편리, 가격까지</h4>
                <p>막스트라 플러스 필터로 보이지 않는 불순물을 걸러<br>
                    물 맛까지 살리는 브리타. 이젠 집에서 손 쉽게<br>
                    깨끗하고 맛있는 물을 마셔보세요!</p>
            </div>
        </div>
        
        
    </section>
    <section id="Bsec" class="mx-0">
        <div class="event">
            <h3>이벤트</h3>
            <div class="swiper event-mySwiper">
                <div class="swiper-wrapper  event-swiper">
                    <div class="swiper-slide ev1"></div>
                    <div class="swiper-slide ev2"></div>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section>

    <section id="Csec" class="">
        <h3>고객찐리뷰</h3>


        <!-- <div class="review d-flex justify-content-between">
            <ul>
                <li></li>
                <li></li>
                <li>
                <li></li>
                <li></li>
            </ul>
        </div> -->


        <div class="rt row justify-content-center">
            <div class="re col-lg col-md-8 mx-md-auto text-center text-lg-left mb-5 mb-lg-0">
                <a href=""><img src="/ncs/img/britaproject_img/review1.jpg" alt=""></a>
                <div class="re_img d-flex justify-content-between ">
                    <p >best review</p>
                    <div>
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                    </div>
                </div>
                <p class="text-left">드디어 입문한 브리타 플로우! 냉
                    장고에 쏙 들어가는 크기라 자리
                    차지하지도 않고 시원하게 마실...
                </p>
            </div>
            <div class="re   col-lg  col-md-6">
                <a href=""><img src="/ncs/img/britaproject_img/review2.jpg" alt=""></a>
                <div class="re_img d-flex justify-content-between">
                    <p class="mb-0">best review</p>
                    <div>
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                    </div>
                </div>
                <p>보관도 용이하고 플라스틱도 눈에
                    띄게 줄어서 제로 웨이스트 참여하
                    는 기분이라 보람차고 좋아요! 와...
                </p>
            </div>
            <div class="re   col-lg   col-md-6">
                <a href=""><img src="/ncs/img/britaproject_img/review3.jpg" alt=""></a>
                <div class="re_img d-flex justify-content-between">
                    <p>best review</p>
                    <div>
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                        <img src="/ncs/img/britaproject_img/star.svg" alt="">
                    </div>
                </div>
                <p>친정엄마 집에 하나 사드렸어요~
                    고양이를 키우시는데 자꾸 버튼을
                    눌러서 물바다가 되는게 고민이...
                </p>
            </div>
            <div class="re   col-lg   col-md-6">
                <a href=""><img src="/ncs/img/britaproject_img/review4.jpg" alt=""></a>
                <div class="re_img d-flex justify-content-end">
                    <img src="/ncs/img/britaproject_img/star.svg" alt="">
                    <img src="/ncs/img/britaproject_img/star.svg" alt="">
                    <img src="/ncs/img/britaproject_img/star.svg" alt="">
                </div>
                <p>사무실에 놓을겸 대용향으로 구매
                    해서 사용중입니다 직원들도 만족
                    하고 있고 생각보다 필터를 자주...
                </p>
            </div>
            <div class="re   col-lg   col-md-6">
                <a href=""><img src="/ncs/img/britaproject_img/review5.jpg" alt=""></a>
                <div class="re_img d-flex justify-content-between">
                    <img src="/ncs/img/britaproject_img/star.svg" alt="">
                    <img src="/ncs/img/britaproject_img/star.svg" alt="">
                    <img src="/ncs/img/britaproject_img/star.svg" alt="">
                </div>
                <p>별명이 하마인 저는 브리타 플로우
                    를 구매해 보았어요! 부엌 자리도
                    크게 차지 안하고 원하는 만큼...
                </p>
            </div>
                
        </div>


            <!-- <ul>
                <li><a href=""><button></button></a></li>
                <li><a href=""><button></button></a></li>
                <li><a href=""><button></button></a></li>
            </ul> -->
    </section>

    <section id="Dsec">
        <div class="box">
            <h3>브리타 뉴스레터</h3>
            <h5>특별 프로모션과 최신뉴스를 한번에 받아보세요!</h5>
            <form action="">
                <ul>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
                <ul>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
            </form>
            <ul>
                <li>
                    <div class="checkbox"></div>
                    <p>본인은 BRITA Korea Co., Ltd.가 브리타 제품 및 서비스 (정수 필터 시스템, 정수 디스펜서 부속품 및 서비스)에 대한 맞춤형 정보, 제안, 특별 프로모션<br>
                        에 대해 이메일로 연락할 수 있음에 동의합니다.* </p>
                </li>
                <li>
                    <div class="checkbox"></div>
                    <p>본인은 BRITA Korea Co., Ltd.가 브리타 제품 및 서비스(정수 필터 시스템, 정수 디스펜서 부속품 및 서비스) 맞춤형 정보, 제안, 특별 프로모션이 포함<br>
                        된 이메일을 보내기 위해 본인의 호칭, 이름, 이메일 주소, 거주 국가를 수집 및 처리할 수 있음에 동의합니다. 본인은 언제든지 동의 의사를 철회할 수 있<br>
                        습니다. 동의가 철회될 때까지 데이터가 보관됩니다. 본인은 동의를 거부할 권리가 있으며 거부 시 상기 이메일 전송은 거부되거나 제한됩니다.</p>
                </li>
            </ul>
        </div>
    </section>

    <section id="Esec">
        <h3>판매처찾기</h3>
        <ul>
            <li><a href="">검색으로 찾기</a></li>
            <li><a href="">매장, 도로명, 동명을 검색해주세요.</a></li>
        </ul>
        <div>
            <img src="" alt="">
        </div>
        <form action="">
            <ul>
                <li><a href="">용산점</a></li>
                <li><a href="">가로수길점</a></li>
                <li><a href="">강남점</a></li>
                <li><a href="">송파점</a></li>
            </ul>
        </form>
    </section>
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');