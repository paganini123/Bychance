// 포트폴리오 메뉴 선택
$(document).ready(function(){
    var tabAnchor = $('.select__portfolio a'),
        tabPanel = $('.portfolio__area');

        tabAnchor.click(function(e){
            e.preventDefault();

            tabAnchor.removeClass('active');            
            $(this).addClass('active');
            

            tabPanel.hide();

            var $target = $(this).attr('href');

            
            $($target).slideDown(1000);
            
        });
});
// 마우스 hover 텍스트 변경
$(document).ready(function(){
  $('#nav__1, .drop_select_1').hover(function() {
		$("#nav__1").text("회사소개");      
       }, function(){
          $("#nav__1").text("About us");
            });
  $('#nav__2').hover(function() {
    $("#nav__2").text("서비스소개");      
        }, function(){
           $("#nav__2").text("Service");
            });
   $('#nav__3, .drop_select_3').hover(function() {
     $("#nav__3").text("포트폴리오");      
        }, function(){
           $("#nav__3").text("Portfolio");
            });
    $('#nav__4').hover(function() {
       $("#nav__4").text("견적문의");      
        }, function(){
            $("#nav__4").text("Contact");
            });      
          });
  
// $(document).ready(function(){
//   $('#nav__1').hover(function() {
// 		$("#nav__1").text("회사소개");
//     $("#nav__1").fadeout();
//        }, function(){
//           $("#nav__1").text("About us");
//             });
//         });



// 포트폴리오 메뉴 선택

// 스크롤헤더
/*==================== CHANGE BACKGROUND HEADER. 스크롤 할 때 어느순간 navbar 배경이 흰색으로 변경 ====================*/
function scrollHeader(){
    const header = document.getElementById('header')
    // When the scroll is greater than 100 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 100){ 
      header.classList.add('scroll-header');
     } else { 
       header.classList.remove('scroll-header')
     }
  }
  window.addEventListener('scroll', scrollHeader)