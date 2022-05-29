<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.head')
</head>
<body>
@include('user.header')
<hr class="offset-md">
<div class="container faq">
    <div class="row">
        <div class="col-sm-6">
            <a class="collapsed" role="button" data-toggle="collapse" href="#question1" aria-expanded="false" aria-controls="question1">
                <h1 class="h3">How much should I bid?</h1>
            </a>

            <div class="collapse" id="question1" aria-expanded="false" style="height: 0px;">
                <div class="well">
                    <p>
                        Unistore is great for finding deals, as long as you know what you're looking for and how much the item is worth. Having that information is vital to placing bids in correct amount and saving lots of money.
                    </p>
                </div>
            </div>
            <br>
            <!-- //// -->

            <a class="" role="button" data-toggle="collapse" href="#question3" aria-expanded="false" aria-controls="question3">
                <h1 class="h3">What's the best way to find my favorite items?</h1>
            </a>

            <div class="collapse" id="question3" >
                <div class="well">
                    <p>
                        If you're sick of trying to remember your searches for all the different types of spellings, all the different sellers you like, and all the different things you collect, Unistore provides you with an easy way to remember - My Unistore.
                    </p>
                </div>
            </div>
            <br>
            <!-- //// -->

            <a class="" role="button" data-toggle="collapse" href="#question5" aria-expanded="false" aria-controls="question5">
                <h1 class="h3">What should I use to pay?</h1>
            </a>

            <div class="collapse" id="question5">
                <div class="well">
                    <p>
                        Although we've heard of issues with PayPal, we still recommend them for nearly all purchases. Nearly all sellers accept PayPal payment, and many purchases are automatically covered for fraud protection. Please check PayPal.com for details on their account protection tips and fraud protection services.
                    </p>
                </div>
            </div>
            <br>
            <!-- //// -->
        </div>
        <div class="col-sm-6">
            <a class="" role="button" data-toggle="collapse" href="#question2" aria-expanded="false" aria-controls="question2">
                <h1 class="h3">What's the best way to search?</h1>
            </a>

            <div class="collapse" id="question2">
                <div class="well">
                    <p>
                        Unistore search engine is pretty good but can be a bit overwhelming if you're not sure what you're looking for, or if you're just browsing. Unistore is constantly working at upgrading its search engine to make things easier to find (it's in their best interest to have as many buyers for items as possible).
                    </p>
                </div>
            </div>
            <br>
            <!-- //// -->

            <a class="" role="button" data-toggle="collapse" href="#question4" aria-expanded="false" aria-controls="question4">
                <h1 class="h3">What's a good shipping rate/method?</h1>
            </a>

            <div class="collapse" id="question4">
                <div class="well">
                    <p>
                        If possible, check with the seller to ask how they'll pack the item. I once received a used laptop that was literally scotch-taped into a used, ripped, USPS priority box that was too small so part of the computer was sticking out - with no padding what-so-ever. If you're getting breakable items, make sure the seller will pack it correctly.
                    </p>
                </div>
            </div>
            <br>
            <!-- //// -->

            <a class="" role="button" data-toggle="collapse" href="#question6" aria-expanded="false" aria-controls="question6">
                <h1 class="h3">What should I do if the item is defective/broken/wrong?</h1>
            </a>

            <div class="collapse" id="question6">
                <div class="well">
                    <p>
                        The first thing to do is to double check the item - make sure it actually is broken. You'll probably need to go over the item description on eBay to verify that it didn't arrive as promised. Next, contact the seller directly and describe the issue with the item.
                    </p>
                </div>
            </div>
            <br>
            <!-- //// -->
        </div>
    </div>
</div>
<hr class="offset-lg">
<div class="gray">
    <div class="container align-center">
        <h1> Need our help? </h1>
        <p> Please select a question above first so we can connect you <br class="visible-md visible-lg"> to the right agent. </p>

        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form class="contact" action="index.php" method="post">
                    <textarea class="form-control" name="message" placeholder="Message" required="" rows="5"></textarea>
                    <br>

                    <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control">
                    <br>

                    <button type="submit" class="btn btn-primary justify"> Send question <i class="ion-android-send"></i> </button>
                </form>
            </div>
        </div>
    </div>
    <br>
</div>
<hr class="offset-lg">
<hr class="offset-lg">
@include('user.footer')
</body>
</html>
