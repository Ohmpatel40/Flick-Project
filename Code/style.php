@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600&display=swap');
*
{
    box-sizing: border-box;
    padding: 0;
    margin: 0%;
}

body
{
    background-color: black;
    color: white;
    overflow-x: hidden;
}

a:link
{
    text-decoration: none;
}

.header
{
    background-color: black;
    display: flex;
    align-items: center;
    height: 60px;
    width: 100%;
    position: relative;
}

.logo_menu
{
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 88%;
}

.header_logo
{
    width: 120px;
    height: 88px;
    margin-left: 10px;
    padding-bottom: 5px;
}

.menu
{
    width: 270px;
    display: flex;
    margin-left: 20px;
    padding-top: 0px;
    justify-content: space-between;
}

.header_menu
{
    color: #BABABA;
    font-family: 'Open Sans', sans-serif;
    font-size: 15px;
}

.search
{
    position: absolute;
    right: 50px;
    display: flex;
    align-items: center;
    padding-right: 10px;
}

.search_logo
{
    font-size: 18px;
    color: white;
    padding-right: 20px;
}

.user_logo
{
    height: 26px;
    width: 30px;
}

.main_banner
{
    width: 100%;
    height: 519px;
    position: relative;
}

.movie_banner
{
    width: 100%;
    height: 519px;
}

.movie_banner_overlay
{
    width: 100%;
    height: 519px;
    position: absolute;
    top: 0;
    left: 0;
}

.buttons
{
    position: absolute;
    bottom: 60px;
    right: 20px;
    display: flex;
}

.btn_play
{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 146px;
    height: 45px;
    border-radius: 10px;
    border: none;
    outline: none;
    font-size: 18px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    background-color: #FCE762;
    cursor: pointer;
}

.banner_link_movie:hover , .banner_link_movie:active , .banner_link_movie:visited , .banner_link_movie:link
{
    color: black;
    text-decoration: none;
} 

.add:hover , .add:active , .add:visited , .add:link
{
    color: white;
    text-decoration: none;
}

.mylist
{
    background-color: #7B7B78;
    color: white;
    margin-left: 10px;
}

.banner_play , .banner_plus
{
    margin-right: 5px;
}

.list
{
    margin-top: 20px;
    display: grid;
    position: relative;
}
.list_title
{
    font-size: 16px;
    font-family: 'Open Sans', sans-serif;
    color: white;
    font-weight: 400;
    margin-left: 14px;
}

.movie_list
{
    margin-top: 0px;
    display: flex;
    overflow-y: hidden;
    overflow-x: scroll;
    scroll-behavior: smooth;
    padding: 10px;
    padding-left: 0px;
    margin-left: 14px;
}

.movie_list::-webkit-scrollbar
{
    overflow: hidden;
}

.movie_poster
{
    width: 137px;
    height: 207px;
    margin-right: 11px;
    border-radius: 7px;
    transition: transform 0.2s ease-in;
}

.movie_poster:hover
{
    transform: scale(1.1);
}

.next
{
    position: absolute;
    right: 0;
    top: 37;
    opacity: 0.8;
    
}

.previous
{
    position: absolute;
    left: 0;
    top: 37;
    opacity: 0.8;
    margin-left: 14px;
}


.slide_right , .slide_left
{
    height: 207px;
    width: 30px;
    font-size: 30px;
    color: white;
    background-color: black; 
    border: none;
    outline: none;
    cursor: pointer;
}

.slide_left
{
    visibility: hidden;
}

.visible
{
    visibility: visible;
}

.top_list
{
    position: relative;
    align-items: center;
    margin-right: 10px;
}

.rank
{
    position: absolute;
    color: black;
    font-family: 'Oswald', sans-serif;
    font-size: 305px;
    -webkit-text-fill-color: black; 
    -webkit-text-stroke-width: 4px;
    -webkit-text-stroke-color: #B5B5B5;
    top: -70;
    left: 0;
    z-index: -1;
}

.top_poster
{
    width: 177px;
    height: 258px;
    margin-left: 105px;
}

.first
{
    margin-left: 85px;
}

.last
{
    margin-left: 220px;
}

.next_top
{
    position: absolute;
    right: 0;
    top: 37;
    opacity: 0.8;
    
}

.previous_top
{
    position: absolute;
    left: 0;
    top: 37;
    opacity: 0.8;
    margin-left: 14px;
}

.slide_right_top , .slide_left_top
{
    height: 259px;
    width: 30px;
    font-size: 30px;
    color: white;
    background-color: black; 
    border: none;
    outline: none;
    cursor: pointer;
}

.slide_left_top
{
    visibility: hidden;
}

.show
{
    visibility: visible;
}

.movie_details
{
    position: relative;
    margin-bottom: 140px;
}

.movie_detail_bg
{
    position: absolute;
    top: -100;
    right: -125;
    width: 1000px;
    height: 600px;
    z-index: -2;
    
    
}
.movie_detail_bg_overlay
{
    position: absolute;
    top: -14;
    right: 0;
    width: 900px;
    height: 540px;
    z-index: -1;
}

.movie_details
{
    margin-left: 40px;
}

.movie_name
{
    color: white;
    font-family: 'Open Sans', sans-serif;
    font-weight: 500;
    font-size: 38px;
    margin-top: 20px;
}

.movie_info
{
    display: flex;
    align-items: center;
    width: 250px;
    height: 30px;
    margin-left: 5px;
}

.imdb
{
    border: none;
    outline: none;
    background-color: black;
}

.fa-imdb
{
    font-size: 30px;
    color: #B1B1B1;
}

.info_div
{
    margin-left: 6px;
    margin-top: 5px;
    display: flex;
    width: 320px;
    height: 30px;
    justify-content: space-between;
}

.info
{
    color: #B1B1B1;
    font-family: 'Open Sans', sans-serif;
    font-weight: 200;
    font-size: 18px;
}

.movie_details_buttons
{
    display: flex;
    margin-top: 20px;
}

.play_button
{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 124px;
    height: 43px;
    background-color: #FCE762;
    color: black;
    border-radius: 10px;
    outline: none;
    border: none;
    font-family: 'Open Sans', sans-serif;
    font-size: 20px;
    font-weight: 600;
}

.add_button
{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 43;
    height: 43;
    background-color: #919191;
    color: white;
    border-radius: 50%;
    outline: none;
    border: none;
    font-family: 'Open Sans', sans-serif;
    font-size: 20px;
    font-weight: 600;
    margin-left: 15px;
}

.plot
{
    font-family: 'Open Sans', sans-serif;
    font-size: 18px;
    color: white;
    font-weight: 200;
    width: 550px;
    margin-top: 30px;
}

.cast
{
    width: 600px;
    border: none;
    font-family: 'Open Sans', sans-serif;
    font-size: 18px;
    margin-top: 40px;
}

tr
{
    vertical-align: text-top;
}

td
{
    padding-bottom: 7px;
}
.white
{
    color: white;
    width: 160px;
}

.grey
{
    color: #919191
}

.footer
{
    text-align: center;
    margin-top: -60px;
}
.footer_logo
{
    width: 68px;
    height: 56px;
    text-align: center;
}

.footer_info_div
{
    width: 700px;
    display: flex;
    justify-content: space-between;
    margin-left: 350px;
    margin-top: -10px;
}

.footer_info
{
    font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    font-size: 16px;
    color: #FCE762;
    text-align: center
}

.footer_grey
{
    color: #A2A2A2;
}


.register
{
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

.register_form
{
    background-color: rgba(0,0,0,0.7);
    color: white;
    margin-top: 7%;
    padding: 30px 25px 10px 25px;
    font-family: 'Open Sans', sans-serif; 
}

.group
{
    width: 420px;
    display: flex;
    justify-content: space-between;
    
}

.text
{
    font-family: 'Open Sans', sans-serif;
    font-size: 15px;
    width: 200px;
    padding: 13px 15px 13px 20px;
    border-radius: 30px;
    border: 2px solid #FCE762;
    background-color: transparent;
    color: white;
    outline: none;
    margin-bottom: 20px;
}

.email
{
    width: 100%;
}

.text:focus
{
    box-shadow: 0px 0px 10px rgba(252,231,98,1);
}

.register_btn
{
    border-radius: 100px;
    width: 100%;
    background-color: #FCE762;
    color: black;
    font-size: 20px;
    border: none;
    outline: none;
    padding: 10px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    margin-top: 10px;
    cursor: pointer;
    display: block;
}

.error
{
    background-color: rgba(255,0,0,0.4);
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 7px;
    margin-bottom: 15px;
    margin-top: -20px;
}

.success
{
    background-color: rgba(22,219,101,0.4);
    height: 55px;
    text-align: center;
}

.sign_in
{
    display: flex;
    align-items: center;
    justify-content: center;
}

.sign_in_bg
{
    position: absolute;
    top:0;
    left:0;
    width: 100%;
    height: 100vh;
    opacity: 80%;
    z-index: -1;
}

.sign_in_logo
{
    position: absolute;
    width: 181px;
    height: 133px;
    top: -15;
    left: 15; 
}

.sign_in_form
{
    background-color: rgba(0,0,0,0.7);
    color: white;
    width: 420px;
    margin-top: 10%;
    padding: 30px 25px 10px 25px;
    font-family: 'Open Sans', sans-serif;
}

.form_head
{
    margin-bottom: 25px;
    font-weight: 400;
    font-family: 'Open Sans', sans-serif;
    font-size: 30px;
    font-weight: 600;
}

.need_help
{
    font-family: 'Open Sans', sans-serif;
    font-size: 12px;
    color: #9F9696;
    text-align: right;
    margin-top: 10px;
    font-weight: 400;
}

.new_user
{
    font-family: 'Open Sans', sans-serif;
    font-size: 15px;
    color: #9F9696;
    text-align: center;
    margin-top: 45px;
    font-weight: 400;
}

.sign_up
{
    color: white;
    font-weight: 400;
}

.main_div
{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 10%;
}

.whos_watch_head
{
    color: white;
    font-family: 'Open Sans', sans-serif;
    font-size: 50px;
    font-weight: 400;
    margin-bottom: 20px;
}

.all_user
{
    display:flex;
    align-items: center;
    justify-content: center;
}

.users
{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
}

.user_img
{
    width: 160px;
    height: 150px;
}

.user_name
{
    color: #ACACAC;
    font-family: 'Open Sans', sans-serif;
    font-size: 18px;
    font-weight: 400;
    margin-top: 5px;
}

.add_user
{
    width: 150px;
    height: 150px;
    outline: none;
    border: none;
    border-radius: 50%;
    font-size: 60px;
    background-color: #373737;
    color: black;
    cursor: pointer;
}

.manage
{
    font-family: 'Open Sans', sans-serif;
    font-size: 20px;
    font-weight: 400;
    background-color: black;
    outline: none;
    border: 2px solid #ACACAC;
    color: #ACACAC;
    padding: 10px 70px;
    margin-top: 30px;
    cursor: pointer;
}

.new_center_div
{
    display:flex;
    justify-content: center;
    align-items: center;
    margin-top: 6%;
    flex-direction: column;
}

.new_user_head
{
    font-family: 'Open Sans', sans-serif;
    font-size: 50px;
    font-weight: 600;
    color: white;
    margin-bottom: 40px;
}

.select_icon
{
    color: white;
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    font-size: 20px;
    font-weight: 400;
    margin-bottom: -20px;
}

input[type=radio]
{
    opacity: 0;
    width: 0;
}

ul {
  list-style-type: none;
}

.second
{
    margin-top: -40px;
}

li {
  display: inline-block;
  margin-right: -35px;
}

input[type="checkbox"][id^="cb"] {
  display: none;
}

label {
  padding: 10px;
  display: block;
  position: relative;
  margin: 10px;
  cursor: pointer;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

label::before {
  background-color: white;
  color: white;
  content: " ";
  display: block;
  border-radius: 50%;
  border: 1px solid grey;
  position: absolute;
  top: 9px;
  left: 11px;
  height: 64px;
  width: 66px;
  text-align: center;
  line-height: 20px;
  font-size: 14px;
  transition-duration: 0.4s;
  transform: scale(0);
  z-index: -1;
}

label img {
  height: 65px;
  width: 70px;
  transition-duration: 0.2s;
  transform-origin: 50% 50%;
}

:checked+label {
  border-color: #ddd;
}

:checked+label::before {
  content: "";
  background-color: green;
  transform: scale(1);
  z-index: -1;
  box-shadow: 0px 0px 10px rgba(22,219,101,1);
}

:checked+label img {
  z-index: 0;
}

.new_user_form
{
    text-align: center;
}

.new_user_name
{
    margin-top: 30px;
    width: 300px;
    padding: 10px;
    font-size: 15px;
    color: white;
    background-color: #616161;
    border-radius: 7px;
    outline: none;
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
}


.new_user_btn
{
    width: 150px;
    background-color: #FCE762;
    color: black;
    font-size: 18px;
    border: none;
    outline: none;
    padding: 10px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    border-radius: 7px;
    margin-top: 25px;
    text-align: center;
    border: 3px solid #FCE762;
    cursor: pointer;
}

.delete_user_btn
{
    width: 150px;
    background-color: black;
    color: grey;
    font-size: 18px;
    border: none;
    outline: none;
    padding: 10px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    border-radius: 7px;
    margin-top: 25px;
    text-align: center;
    border: 3px solid grey;
    margin-left: 20px;
    cursor: pointer;
}

.alert
{
    font-family: 'Open Sans', sans-serif;
    color: white;
}

.disable
{
    display: none;
}

.btns
{
    display: flex;
    justify-content: center;
    align-items: center;
}

.search_div
{
    display: flex;
    align-items: center;
    justify-content: center;
}

.search_input
{
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid white;
    height: 100px;
}

.search
{
    font-size: 12px;
}

.result
{
    display: flex;
    flex-flow: row wrap;
    align-items: center;
    justify-content: space-evenly;
    padding: 25px;
}

.result_poster
{
    height: 217px;
    width: 147px;
    margin-bottom: 45px;
    border-radius: 7px;
    transition: transform 0.2s ease-in;
}

.result_poster:hover
{
    transform: scale(1.1);
}
