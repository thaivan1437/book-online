<div class="chat_facebook">
	<a href="javascript:" class="button_chat2">
		<img src="assets/images/chat.png" alt="chat facebook" class="img-responsive" />
	</a>
	<div class="contain_chatpopup2">
		
		 <div class="fb-page" data-tabs="messages" data-href="<?=$row_setting["facebook"]?>" data-width="250" data-height="290" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false" data-show-posts="false"></div>
	</div><!--end contain chat popup-->
</div><!---->

<style>
	.button_chat2{
		font-size:14px;color:#fff !important;
		position:absolute;top:-34px;
		right:15px;
		cursor:pointer;
		-webkit-transition:all 0.3s;-moz-transition:all 0.3s;-o-transition:all 0.3s;-ms-transition:all 0.3s;transition:all 0.3s;transition-timing-function:linear;
	}
	.onclick{transition-delay:3s;}
	.chat_facebook{position:fixed;right:0px;z-index:999;bottom:-30px;-webkit-transition:all 0.5s;-moz-transition:all 0.5s;-o-transition:all 0.5s;-ms-transition:all 0.5s;transition:all 0.5s;}
	.contact{float:left;}
	.button_chat2{position:absolute;top:-85px;}
	.move_button{
		right: 90px;
		top: -40px;
		width: 200px;
	}
	.contain_chatpopup2{width:290px;background:#fff;min-height:290px;}
	.contain_chatpopup2 img{vertical-align:middle;}
</style>