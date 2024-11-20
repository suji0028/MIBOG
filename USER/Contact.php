<?php 
    include("header.php")
?>
        
        <!--contact sec start-->

            <div class="contact-sec">
                <div class="container-fluid">
                    <div class="contact-innner-area">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-inner-text">
                                    <p>
                                        Get in touch
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content-from-area">
                                    <div class="content-text">
                                        <p>
                                            Write us a message
                                        </p>
                                    </div>
                                    <form action="/action_page.php">

                                        <input type="text" id="from-text" placeholder="Name">

                                        <input type="text" id="from-text" placeholder="Email">

                                        <textarea rows="5" id="from-text">Message   </textarea>

                                        <div class="contact-from-submit-btn">
                                            <button>
                                                <span>SUBMIT</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!--contact sec end-->

        <?php
    include("footer.php")
?>