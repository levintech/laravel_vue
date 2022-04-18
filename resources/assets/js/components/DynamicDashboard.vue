<template>
    <div>
        <music-search></music-search>

        <div class="at">
            <div class="shr">
                <div class="fb"><i class="fa-facebook"></i> Share on Facebook</div>
                <div class="tw"><i class="fa-twitter"></i> Share on Twitter</div>
            </div>
            <div class="addthis_inline_share_toolbox_zskn"></div>
        </div>

		<section id="s">
			<h1 class="st ve"><i class="fa-star-full"></i> {{title}} Free Download</h1>
			<div class="tx mtx" rel="111">
                <p>You just found <strong>{{title}}</strong>. 
                    But not only that, but you are nowhere to <strong>download free</strong> hi-fi <strong>mp3</strong> like they don't exist on other sites. 
                    As if that were not enough, we offer you the opportunity to <strong>listen to music online</strong> , and then download it with total security, 
                    avoiding that your computer or telephone is filled with malware. Commonly, the best quality to <strong>download mp3 music</strong> is 192kbps. 
                    For this reason, we recommend something different that the quality is even more refined. 
                    Hence, play the playlist that we have put together for you, in truth, one of the themes that I propose to you is: 
                    {{title}} ioKarenge Daru party my tom and you already know that you can download the <strong>free mp3 song</strong>. 
                    Of course, you will also be able to if you choose to listen to it without annoying pop up and without the need to download the music.</p>
			</div>
			<iframe style="margin:0 auto 10px auto;width:300px;height:70px;display:block;border:1px solid #385898;" src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/108415827591318/&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=true&amp;show_facepile=false"></iframe>
			<ul class="lsm mzk">
				<li v-for="item in music_items"
                    v-bind:key="item.no">
					<div class="p _p"><i class="fa-play3"></i></div>
					<div class="t">
						<h3>{{item.title}}</h3>
						<p><span>•Duración:{{item.time}} </span><span>• Peso: {{item.size}}</span></p>
					</div>
					<div class="b">
						<div class="e _p"></div>
						<div class="d"></div>
					</div>
				</li>
			</ul>
			<div class="at">
				<div class="d">
					<h3>IMPORTANT!</h3><span>Everything on this page is completely free!<br> 
                    <b>Can you help us share it?</b> Thank you very much, have an excellent day!</span></div>
				<div class="addthis_inline_share_toolbox_zskn"></div>
			</div>
			<div class="tx mtx" rel="275">
				<h2>Free {{title}} Music Download</h2>
                <p>Here we facilitate you to enter and choose the theme by category, or by artist, free of charge and <strong>download mp3 of {{title}} ioKarenge Daru party my tom for free</strong> . 
                    Just by entering the name of the song you are looking for, we will give you a playlist with many songs and with the addition that you can play them for free. 
                    In addition, you will be able to download your <strong>songs in mp3 format</strong> , since our intelligent search engine, which is undoubtedly the most efficient, 
                    helps you locate each and every one of the different musics you want, play it before or download it on the electronic gadget you choose.</p>
				<h2>{{title}} Free Download</h2>
                <p>If you are looking for {{title}} ioTalking Angela Summer Fun at the Beach with Talking Tom Shorts Combo, our search engine will give you a list with the different songs you are trying to find, 
                    with the highest quality possible in an mp3 file and download <strong>free music</strong> . Start downloading the <strong>mp3 music</strong> you want to listen to and check the benefits of 
                    downloading from Buenmp3.com.</p>
				<h2>Download {{title}} MP3 for free</h2>
                <p>When you find out about all the help we are offering you, do not hesitate any longer and do not waste any more time. 
                    Find the melodies you appreciate the most and click on the alternative to <strong>download mp3 music</strong> . 
                    Download them without ads on our site in mp3 format. Try <strong>{{title}} El Chombo Dame Tu Cosita Ultra Music mp3</strong></p>
                <p>Listen free <strong>{{title}}</strong> mp3. A total of 20 similar mp3 tracks were found for you. 
                    Here on our website you will be able to <a href="https://vww.buenmp3.com/">download free music</a> online and without any registration. 
                    Music <strong>{{title}} El Chombo Dame Tu Cosita Ultra Music</strong> lasts 2:33, this song was uploaded by "Lil Wick" and has more than 202,042 views and is growing.</p>
			</div>
            <h2 class="st az"><i class="fa-price-tag"></i> Búsquedas recomendadas</h2>
            <!-- <div class="tg">
                <div  v-for="musiclink in musiclinks">
                <a v-bind:href="musiclink.herflink4">{{musiclink.title}}</a>
                </div>
            </div> -->
		</section>

    </div>
</template>

<script>
    export default {
        props : {
            prop_title : String ,
            prop_music_items : {
                type: Array
            }
        } ,

        data () {
            return {
                title : undefined ,
                music_items : undefined
            }
        } ,
        mounted () {
            this.title = this.prop_title;
            this.music_items = this.prop_music_items;
        }
    }
</script>

<style lang="stylus" scoped>

</style>