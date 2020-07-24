<h5><b>News-Letter</b></h5><hr><br>

    <div class="row">
        <div class="col s12 m4 l4"><a class="modal-trigger" href="#modal1"><img class="fancybox" src="images/newsletter/1.jpg" style="height:300px" ></a>
        </div>
        <div class="col s12 m4 l4"><a class="modal-trigger" href="#modal2"><img class="fancybox" src="images/newsletter/2.jpg" style="height:300px" ></a>
        </div>
    </div>


      <br><hr>
            <form>



    <!-- Modal Structure -->


    <div id="modal1" class="modal" style="height:1000px; width:531px;margin:auto;">
        <div class="modal-content" style="padding:0px;">
            <img style="height:750px; margin:auto;" src="images/newsletter/1.jpg">

        </div>
    </div>


    <!-- Modal Structure -->


    <div id="modal2" class="modal" style="height:1000px; width:531px;margin:auto;">
        <div class="modal-content" style="padding:0px;">
            <img style="height:750px; margin:auto;" src="images/newsletter/2.jpg">

        </div>
    </div>











    <script type="text/javascript">
        $(document).ready(function() {
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();
        });
    </script>

