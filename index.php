<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://cdn.jsdelivr.net">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://unpkg.com">
  <meta name="description" content="credence credit">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/res.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/splide.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/themes/splide-default.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/rangable.css">
  <title>Credence Credit</title>
</head>

<body>
  <header class="d-flex justify-content-between align-items-center">
    <a href="/">
      <img loading="lazy" class="logo" src="<?php echo get_template_directory_uri() ?>/img/CredencenewLogo-6.png" alt="Credence credit logo">
    </a>
    <a class="text-decoration-none text-white" href="tel:647 352 3328" target="_blank" rel="noopener noreferrer">
      <div class="call d-flex align-items-center">
        <span class="icn-wrp d-flex align-items-center justify-content-center">
          <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/phone-call.svg" alt="credence credit call">
        </span>
        <span class="mx-2 ">647 352 3328</span>
      </div>
    </a>
  </header>

  <section class="main">
    <div class="main-bg">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 text-xl-start text-center p-lg-5">
            <h1 class="main-h mt-xl-0 mt-2">Reduce your debts by up to 80%</h1>
            <p class="main-sub">Enter your unsecured debt amount and see what you
              can save.</p>

            <section id="calc" class="calc m-xl-0  mx-auto overflow-auto">
              <div class="d-flex justify-content-center mt-3">
                <div class="step d-flex align-items-center active">
                  <div>
                    <span class="num">1</span>
                  </div>
                  <span class="line"></span>
                </div>
                <div id="step-2" class="step d-flex align-items-center">
                  <span class="num">2</span>
                  <span class="line"></span>
                </div>
                <div id="step-3" class="step d-flex align-items-center">
                  <span class="num">3</span>
                </div>
              </div>
              <div class="splide calc-slider">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
                      <div class="text-primary mt-3 text-center fw-bold fs-3">DO YOU QUALIFY?</div>
                      <p class="txt-blue text-center">Get a Free Estimate Today!</p>
                      <div class="mx-3">
                        <input title="amount range" id="range" type="text">
                        <div class="d-flex justify-content-between">
                          <span class="txt-blue">$5000</span>
                          <span class="txt-blue">$100,000</span>
                        </div>
                        <br>
                        <div class="mx-2 txt-blue"><label for="amount">Amount</label></div>
                        <input value="24000" id="amount" class="form-control rounded-pill" type="text">
                        <div class="mt-2 text-start">
                          <div class="form-check">
                            <input checked onclick="return false;" class="form-check-input" type="checkbox" value=""
                              id="c1">
                            <label class="form-check-label txt-blue" for="c1">
                              Reduce it to <span class="fs-5 text-primary fw-bold">$<span
                                  id="reduce-amount">8000</span></span>
                            </label>
                          </div>
                          <div class="form-check">
                            <input checked onclick="return false;" class="form-check-input" type="checkbox" value=""
                              id="c2">
                            <label class="form-check-label txt-blue" for="c2">
                              Your monthly payments will be <span class="fs-5 text-primary fw-bold">$<span
                                  id="mon">200</span></span> for <span class="fs-5 text-primary fw-bold"><span
                                  id="duration">40</span></span>
                            </label>
                          </div>
                          <div class="form-check">
                            <input checked onclick="return false;" class="form-check-input" type="checkbox" value=""
                              id="c3">
                            <label class="form-check-label txt-blue" for="c3">
                              Interest will be zero
                            </label>
                          </div>
                        </div>
                        <button onclick="slideChange('+1')" class="btn btn-red shadow rounded-pill w-100 my-2">Get
                          Started</button>
                      </div>
                    </li>


                    <li class="splide__slide">
                      <section>
                        <div class="fs-3 text-primary mt-3 text-center fw-bold">DO YOU QUALIFY?</div>
                        <p class="txt-blue text-center">Get a Free Estimate Today!</p>
                      </section>
                      <div class="mx-4">
                        <div class="fw-bold fs-3 txt-blue text-center"><label for="monthly-income">Monthly take home
                            income</label>
                        </div>
                        <input id="monthly-income" type="text" class="form-control rounded-pill" placeholder="$5000"
                          value="5000">
                        <div class="d-flex mt-5">
                          <button onclick="slideChange('-1')"
                            class="btn btn-outline-danger rounded-pill w-100 mx-2">Previous</button>
                          <button onclick="slideChange('+1')" class="btn btn-red rounded-pill w-100 mx-2">Next</button>
                        </div>
                      </div>
                    </li>


                    <li class="splide__slide text-start">
                      <form onsubmit="calcFormSubmit(event)">
                        <div class="mx-3">
                          <div class="fs-4 fw-bold txt-blue text-center mb-3">TO OBTAIN YOUR FREE ESTIMATE, FILL-IN THE
                            BELOW FORM…
                          </div>
                          <div class="d-flex justify-content-between">
                            <div class="mb-2 mr-2">
                              <label for="fname" class="form-label txt-blue">First Name</label>
                              <input required type="text" class="form-control rounded-pill" id="fname" name="fname"
                                placeholder="First Name">
                            </div>
                            <div class="mb-2 ml-2">
                              <label for="lname" class="form-label txt-blue">Last Name</label>
                              <input required type="text" class="form-control rounded-pill" id="lname" name="lname"
                                placeholder="Last Name">
                            </div>
                          </div>
                          <div class="mb-2">
                            <label for="email" class="form-label txt-blue">Email</label>
                            <input required type="email" class="form-control rounded-pill" id="email" name="email"
                              placeholder="example@mail.com">
                          </div>
                          <div class="mb-2">
                            <label for="phone" class="form-label txt-blue">Phone</label>
                            <input required type="phone" class="form-control rounded-pill" id="phone" name="phone"
                              placeholder="Phone">
                          </div>
                        </div>
                        <div class="d-flex mt-3">
                          <button type="button" onclick="slideChange('-1')"
                            class="btn btn-outline-danger rounded-pill w-100 mx-3">Previous</button>
                          <button class="btn btn-red rounded-pill w-100 mx-3"
                            type="submit">Submit</button>
                        </div>
                      </form>
                    </li>
                    <li class="splide__slide">
                      <div class="fs-4 fw-bold text-center txt-blue mt-5">Your data successfully submitted.</div>
                      <div class="fs-5 fw-bold text-center txt-blue">Thank You.</div>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
          <div class="col-xl-4 p-xl-5 g-5 d-flex flex-column align-items-center">
            <div class="h-img-wrp">
            </div>
            <div class="d-flex align-items-center mt-3 support">
              <div class="rating">
                <div><img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/google.jpg" alt=""></div>
                <span>5.0</span> <img loading="lazy" class="star" src="<?php echo get_template_directory_uri() ?>/img/star.png" alt="">
              </div>
              <!-- <div class="rating"><img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/bbb.jpg" alt=""></div> -->
              <div class="rating"><img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/warranty.jpg" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <br>
  <br>
  <br>
  <br>

  <div class="blob2 blob "></div>

  <div class="container mt-3">
    <div class="fs-5 fw-bold text-center text-capitalize txt-red">IN THE LAST DECADE</div>
    <h2 class="text-center fw-bold txt-blue">We've Helped Over thousands of Canadians <br> Save Millions Of Dollars In
      Debt</h2>
    <br>
    <br>
    <div class="d-flex justify-content-center align-items-center rat">
      <img loading="lazy" class="g" src="<?php echo get_template_directory_uri() ?>/img/google-letter.png" alt="">
      <h1 class="fw-bold txt-blue mb-0 mx-2">5.0</h1>
      <img loading="lazy" class="s" src="<?php echo get_template_directory_uri() ?>/img/star.png" alt="">
    </div>
    <br>
    <br>
  </div>


  <!-- REVIEWs -->
  <div class="container mb-5">
    <div class="splide review">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <div class="slide-item">
              <div class="d-flex align-items-center">
                <img loading="lazy" class="g-logo" src="<?php echo get_template_directory_uri() ?>/img/google-letter.png" alt="">
                <img loading="lazy" class="g-star" src="<?php echo get_template_directory_uri() ?>/img/star.png" alt="">
              </div>
              <p class="review-text my-2">Since the day i was connected to them I feel worry free! Because the first
                couple months of
                my application some of my creditor keep calling me! So I always call my agent to ask what i
                need to do to that creditor and what ever concerns I had he’s always there to advice me what
                to do! Now Im happy I finished 1 year! Thank you so much for the help now not so much stress
                on my debt! Because I can manage to pay my debt slowly because now it’s affordable my
                monthly payments! Again thank you so much!</p>
              <div class="fw-bold">Maylanie Daquioag Valdez</div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slide-item">
              <div class="d-flex align-items-center">
                <img loading="lazy" class="g-logo" src="<?php echo get_template_directory_uri() ?>/img/google-letter.png" alt="">
                <img loading="lazy" class="g-star" src="<?php echo get_template_directory_uri() ?>/img/star.png" alt="">
              </div>
              <p class="review-text my-2"> These guys are amazing. Mahmood has been so helpful in this journey of
                getting my finances
                back on track. He was able to work out a great deal that will now help me reach my dreams of
                owning a home. The credit counselling was the most important and I learned so much. Thank
                you for helping me out and giving me hope for the future. The process was so simple and it’s
                given me a lot of confidence. Thank you for you services and advice.</p>
              <div class="fw-bold">Lauren Fogazzi</div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slide-item">
              <div class="d-flex align-items-center">
                <img loading="lazy" class="g-logo" src="<?php echo get_template_directory_uri() ?>/img/google-letter.png" alt="">
                <img loading="lazy" class="g-star" src="<?php echo get_template_directory_uri() ?>/img/star.png" alt="">
              </div>
              <p class="review-text my-2">My experience with Sangita was very good. She was very patience even when I
                was ready to
                give up. Thank God for her she encourage and help me focus on the positive. Now I can focus
                on paying one bill I am very happy. Sangita goal is to make sure you are happy. May the Lord
                continue to bless her richly. I will recommend a friend because of the service I received.
                Blessings 👍</p>
              <div class="fw-bold">Levi Beharie</div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slide-item">
              <div class="d-flex align-items-center">
                <img loading="lazy" class="g-logo" src="<?php echo get_template_directory_uri() ?>/img/google-letter.png" alt="">
                <img loading="lazy" class="g-star" src="<?php echo get_template_directory_uri() ?>/img/star.png" alt="">
              </div>
              <p class="review-text my-2">Thanks to Credence Credit for all the help I lost my job and had to depend
                on
                credit cards
                for 10 months, I was really frustrated with my debt and all the collection calls. I went to
                credence credit for counselling, the counsellor helped me consolidate my debt with
                affordable payment.I would refer anyone to go to them as they are professional and
                knowledgeable.</p>
              <div class="fw-bold">nadz h</div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slide-item">
              <div class="d-flex align-items-center">
                <img loading="lazy" class="g-logo" src="<?php echo get_template_directory_uri() ?>/img/google-letter.png" alt="">
                <img loading="lazy" class="g-star" src="<?php echo get_template_directory_uri() ?>/img/star.png" alt="">
              </div>
              <p class="review-text my-2">My experience with CC was exceptional...from the first call I was given
                clear
                instructions
                and was put at ease about the whole process. Loss of my previous job had created more stress
                for me than I anticipated and with the help of CC team I was able to regain the positive
                outlook again. Thank you Mahmood and team!</p>
              <div class="fw-bold">Slavica Djurdjevic</div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slide-item">
              <div class="d-flex align-items-center">
                <img loading="lazy" class="g-logo" src="<?php echo get_template_directory_uri() ?>/img/google-letter.png" alt="">
                <img loading="lazy" class="g-star" src="<?php echo get_template_directory_uri() ?>/img/star.png" alt="">
              </div>
              <p class="review-text my-2">Credence Credit is a firm that truly values its clients. Consultations will
                let you see the
                gaps in your planning and proposed solutions are practical and easy to apply. Would
                definitely recommend anyone looking for some financial wisdom to improve their financial
                profile.</p>
              <div class="fw-bold">Sameen Ather</div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slide-item">
              <div class="d-flex align-items-center">
                <img loading="lazy" class="g-logo" src="<?php echo get_template_directory_uri() ?>/img/google-letter.png" alt="">
                <img loading="lazy" class="g-star" src="<?php echo get_template_directory_uri() ?>/img/star.png" alt="">
              </div>
              <p class="review-text my-2"> Credence credit really helped me in my consumer proposal and would
                recommend
                this to anyone.
                My advisor Mahmood has been extraordinaire in dealing with my situation with out most
                respect and dignity. Thank you again Credence Credit and Mahmood</p>
              <div class="fw-bold">Agnes Samaniego</div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slide-item">
              <div class="d-flex align-items-center">
                <img loading="lazy" class="g-logo" src="<?php echo get_template_directory_uri() ?>/img/google-letter.png" alt="">
                <img loading="lazy" class="g-star" src="<?php echo get_template_directory_uri() ?>/img/star.png" alt="">
              </div>
              <p class="review-text my-2">Credence Credit is very good i assisting their client. My agent Mahmood is
                very
                accommodating. If i have a question he answer me right away. that' why i recommend my two
                friends to credence credit.</p>
              <div class="fw-bold">Maria Merachel</div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slide-item">
              <div class="d-flex align-items-center">
                <img loading="lazy" class="g-logo" src="<?php echo get_template_directory_uri() ?>/img/google-letter.png" alt="">
                <img loading="lazy" class="g-star" src="<?php echo get_template_directory_uri() ?>/img/star.png" alt="">
              </div>
              <p class="review-text my-2">I would say Excellent!!</p>
              <div class="fw-bold">Roxan Fronda</div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slide-item">
              <div class="d-flex align-items-center">
                <img loading="lazy" class="g-logo" src="<?php echo get_template_directory_uri() ?>/img/google-letter.png" alt="">
                <img loading="lazy" class="g-star" src="<?php echo get_template_directory_uri() ?>/img/star.png" alt="">
              </div>
              <p class="review-text my-2">Very good service from Credence. Very professional and transparent.Sangita
                Is
                very helpful
                and empathetic. Gave good advice and followed through! Highly recommended! Thank you
                Credence for all your help!</p>
              <div class="fw-bold">Quangdiem Nguyen</div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slide-item">
              <div class="d-flex align-items-center">
                <img loading="lazy" class="g-logo" src="<?php echo get_template_directory_uri() ?>/img/google-letter.png" alt="">
                <img loading="lazy" class="g-star" src="<?php echo get_template_directory_uri() ?>/img/star.png" alt="">
              </div>
              <p class="review-text my-2">Worked with Mahmood on a fairly complicated situation. He was very calm and
                understanding
                and really took the stress away. It was a pleasure working with him and the Credence team!</p>
              <div class="fw-bold">Sydney S. Iyer</div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="slide-item">
              <div class="d-flex align-items-center">
                <img loading="lazy" class="g-logo" src="<?php echo get_template_directory_uri() ?>/img/google-letter.png" alt="">
                <img loading="lazy" class="g-star" src="<?php echo get_template_directory_uri() ?>/img/star.png" alt="">
              </div>
              <p class="review-text my-2">Credence Credit is very good i assisting their client. My agent Mahmood is
                very
                accommodating. If i have a question he answer me right away. that' why i recommend my two
                friends to credence credit.</p>
              <div class="fw-bold">Maria Merachel</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="blob3 blob "></div>

  <div class="container">
    <h2 class="text-center fw-bold txt-blue mb-4">Debts We Can Help You With</h2>
    <p class="text-center txt-blue mb-5">Learn how to make wise financial decisions, build financial literacy, gain a
      <br> deeper
      understanding of credit, and develop a plan to achieve your goals.
    </p>
  </div>
  <div class="row justify-content-center">
    <div class="col-xl-7 col-lg-8">
      <div class="row justify-content-center">
        <div class="col-6 col-md-4">
          <div class="feature d-flex flex-column align-items-center">
            <div class="img-wrp">
              <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/debs/creditcard.png" alt="">
            </div>
            <span class="fs-5 text-center mt-1">Credit Card
              Balances</span>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="feature d-flex flex-column align-items-center">
            <div class="img-wrp">
              <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/debs/money.png" alt="">
            </div>
            <span class="fs-5 text-center mt-1">Payday Loans</span>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="feature d-flex flex-column align-items-center">
            <div class="img-wrp">
              <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/debs/loan.png" alt="">
            </div>
            <span class="fs-5 text-center mt-1">Personal Loans</span>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="feature d-flex flex-column align-items-center">
            <div class="img-wrp">
              <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/debs/money-stack.png" alt="">
            </div>
            <span class="fs-5 text-center mt-1">Miscellaneous</span>
            <small>(407 Debt, Phone Bills and/or Utility Bills)</small>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="feature d-flex flex-column align-items-center">
            <div class="img-wrp">
              <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/debs/secure-payment.png" alt="">
            </div>
            <span class="fs-5 text-center mt-1">Overdraft and Lines
              of Credit</span>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="feature d-flex flex-column align-items-center">
            <div class="img-wrp">
              <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/debs/bank.png" alt="">
            </div>
            <span class="fs-5 text-center mt-1">Business & Income
              Tax Debt</span>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- review 2 slider -->
  <div class="blob4 blob "></div>

  <h2 class="text-center txt-red fw-bold my-5">RECENT SETTLEMENTS</h2>
  <div class="row justify-content-center position-relative mx-auto position-relative">
    <div class="blob1  blob "></div>
    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-12">
      <div class="splide review-second mx-auto">
        <div class="splide__track">
          <ul class="splide__list">

            <li class="splide__slide d-flex justify-content-center">
              <div class="card-wrp">
                <section class="before-card m-3">
                  <div class="fs-5 fw-bold mb-2">Before</div>
                  <div class="d-flex align-items-center mb-2"><span>
                      <img loading="lazy" class="icn" src="<?php echo get_template_directory_uri() ?>/img/sum.svg" alt="sum"></span> Total Debt: &nbsp;
                    <b> $19,723</b>
                  </div>
                  <div class="d-flex align-items-center mb-2"><span><img loading="lazy" class="icn"
                        src="<?php echo get_template_directory_uri() ?>/img/calendar.svg" alt="sum"></span>
                    Monthly Payment:&nbsp; <b>$654</b></div>
                  <div class="d-flex mb-2"><span><img loading="lazy" class="icn" src="<?php echo get_template_directory_uri() ?>/img/dot.svg" alt="sum"></span>
                    <div>Creditors: <b>TD Canadian Tire, Easy Financial, Scotiabank</b></div>
                  </div>
                  <div> <img loading="lazy" class="icn" src="<?php echo get_template_directory_uri() ?>/img/user.svg" alt=""> A.Samaniego <br><small> – North
                      York, ON</small>
                  </div>
                </section>

                <div class="before-card after-card">
                  <div class="fs-5 fw-bold mb-2">After</div>
                  <div class="d-flex align-items-center mb-2"><span>
                      <img loading="lazy" class="icn" src="<?php echo get_template_directory_uri() ?>/img/sum.svg" alt="sum"></span>Settlement Amount &nbsp;
                    <b> $7,500</b>
                  </div>
                  <div class="d-flex align-items-center mb-2"><span><img loading="lazy" class="icn"
                        src="<?php echo get_template_directory_uri() ?>/img/calendar.svg" alt="sum"></span>
                    New Monthly Payment:&nbsp; <b> $125</b></div>
                  <div class="d-flex align-items-center mb-2"><span><img loading="lazy" class="icn"
                        src="<?php echo get_template_directory_uri() ?>/img/money-bag.svg" alt="sum"></span>
                    Total Savings:&nbsp; <b> $12,223</b></div>
                  <div class="d-flex align-items-center mb-2"><span><img loading="lazy" class="icn"
                        src="<?php echo get_template_directory_uri() ?>/img/low-price.svg" alt="sum"></span>
                    Debt Reduction:&nbsp; <b> 62%</b></div>
                  <img loading="lazy" class="logo mt-2 float-end" src="<?php echo get_template_directory_uri() ?>/img/CredencenewLogo-6.png" alt="">
                </div>
              </div>
            </li>

            <li class="splide__slide d-flex justify-content-center">
              <div class="card-wrp">
                <section class="before-card m-3">
                  <div class="fs-5 fw-bold mb-2">Before</div>
                  <div class="d-flex align-items-center mb-2"><span>
                      <img loading="lazy" class="icn" src="<?php echo get_template_directory_uri() ?>/img/sum.svg" alt="sum"></span> Total Debt: &nbsp;
                    <b> $53,629</b>
                  </div>
                  <div class="d-flex align-items-center mb-2"><span><img loading="lazy" class="icn"
                        src="<?php echo get_template_directory_uri() ?>/img/calendar.svg" alt="sum"></span>
                    Monthly Payment:&nbsp; <b>$1,609</b></div>
                  <div class="d-flex mb-2"><span><img loading="lazy" class="icn" src="<?php echo get_template_directory_uri() ?>/img/dot.svg" alt="sum"></span>
                    <div>Creditors: <b>Money Mart, CIBC, RBC, Rogers, Income Tax</b></div>
                  </div>
                  <div> <img loading="lazy" class="icn" src="<?php echo get_template_directory_uri() ?>/img/user.svg" alt="">D.Craib <br><small> – North York,
                      ON</small>
                  </div>
                </section>

                <div class="before-card after-card">
                  <div class="fs-5 fw-bold mb-2">After</div>
                  <div class="d-flex align-items-center mb-2"><span>
                      <img loading="lazy" class="icn" src="<?php echo get_template_directory_uri() ?>/img/sum.svg" alt="sum"></span>Settlement Amount &nbsp;
                    <b> $18,000</b>
                  </div>
                  <div class="d-flex align-items-center mb-2"><span><img loading="lazy" class="icn"
                        src="<?php echo get_template_directory_uri() ?>/img/calendar.svg" alt="sum"></span>
                    New Monthly Payment:&nbsp; <b> $300</b></div>
                  <div class="d-flex align-items-center mb-2"><span><img loading="lazy" class="icn"
                        src="<?php echo get_template_directory_uri() ?>/img/money-bag.svg" alt="sum"></span>
                    Total Savings:&nbsp; <b> $35,629</b></div>
                  <div class="d-flex align-items-center mb-2"><span><img loading="lazy" class="icn"
                        src="<?php echo get_template_directory_uri() ?>/img/low-price.svg" alt="sum"></span>
                    Debt Reduction:&nbsp; <b> 66.5%</b></div>
                  <img loading="lazy" class="logo mt-2 float-end" src="<?php echo get_template_directory_uri() ?>/img/CredencenewLogo-6.png" alt="">
                </div>
              </div>
            </li>

            <li class="splide__slide d-flex justify-content-center">
              <div class="card-wrp">
                <section class="before-card m-3">
                  <div class="fs-5 fw-bold mb-2">Before</div>
                  <div class="d-flex align-items-center mb-2"><span>
                      <img loading="lazy" class="icn" src="<?php echo get_template_directory_uri() ?>/img/sum.svg" alt="sum"></span> Total Debt: &nbsp;
                    <b> $38,549</b>
                  </div>
                  <div class="d-flex align-items-center mb-2"><span><img loading="lazy" class="icn"
                        src="<?php echo get_template_directory_uri() ?>/img/calendar.svg" alt="sum"></span>
                    Monthly Payment:&nbsp; <b>$1,154</b></div>
                  <div class="d-flex mb-2"><span><img loading="lazy" class="icn" src="<?php echo get_template_directory_uri() ?>/img/dot.svg" alt="sum"></span>
                    <div>Creditors: <b>TD, The Brick, BMO, PC Financial, Walmart</b></div>
                  </div>
                  <div> <img loading="lazy" class="icn" src="<?php echo get_template_directory_uri() ?>/img/user.svg" alt="">M.Elenor <br><small> – Scarborough,
                      ON</small>
                  </div>
                </section>

                <div class="before-card after-card">
                  <div class="fs-5 fw-bold mb-2">After</div>
                  <div class="d-flex align-items-center mb-2"><span>
                      <img loading="lazy" class="icn" src="<?php echo get_template_directory_uri() ?>/img/sum.svg" alt="sum"></span>Settlement Amount &nbsp;
                    <b> $7,500</b>
                  </div>
                  <div class="d-flex align-items-center mb-2"><span><img loading="lazy" class="icn"
                        src="<?php echo get_template_directory_uri() ?>/img/calendar.svg" alt="sum"></span>
                    New Monthly Payment:&nbsp; <b> $125</b></div>
                  <div class="d-flex align-items-center mb-2"><span><img loading="lazy" class="icn"
                        src="<?php echo get_template_directory_uri() ?>/img/money-bag.svg" alt="sum"></span>
                    Total Savings:&nbsp; <b> $12,223</b></div>
                  <div class="d-flex align-items-center mb-2"><span><img loading="lazy" class="icn"
                        src="<?php echo get_template_directory_uri() ?>/img/low-price.svg" alt="sum"></span>
                    Debt Reduction:&nbsp; <b> 62%</b></div>
                  <img loading="lazy" class="logo mt-2 float-end" src="<?php echo get_template_directory_uri() ?>/img/CredencenewLogo-6.png" alt="">
                </div>
              </div>
            </li>

            <li class="splide__slide d-flex justify-content-center">
              <div class="card-wrp">
                <section class="before-card m-3">
                  <div class="fs-5 fw-bold mb-2">Before</div>
                  <div class="d-flex align-items-center mb-2"><span>
                      <img loading="lazy" class="icn" src="<?php echo get_template_directory_uri() ?>/img/sum.svg" alt="sum"></span> Total Debt: &nbsp;
                    <b> $86,549</b>
                  </div>
                  <div class="d-flex align-items-center mb-2"><span><img loading="lazy" class="icn"
                        src="<?php echo get_template_directory_uri() ?>/img/calendar.svg" alt="sum"></span>
                    Monthly Payment:&nbsp; <b>$2,139</b></div>
                  <div class="d-flex mb-2"><span><img loading="lazy" class="icn" src="<?php echo get_template_directory_uri() ?>/img/dot.svg" alt="sum"></span>
                    <div>Creditors: <b>RBC, Fairstone, Money Mart, CIBC, Student Loan</b></div>
                  </div>
                  <div> <img loading="lazy" class="icn" src="<?php echo get_template_directory_uri() ?>/img/user.svg" alt="">M.Quennell <br><small> – Toronto, ON
                    </small>
                  </div>
                </section>

                <div class="before-card after-card">
                  <div class="fs-5 fw-bold mb-2">After</div>
                  <div class="d-flex align-items-center mb-2"><span>
                      <img loading="lazy" class="icn" src="<?php echo get_template_directory_uri() ?>/img/sum.svg" alt="sum"></span>Settlement Amount &nbsp;
                    <b> $16,200</b>
                  </div>
                  <div class="d-flex align-items-center mb-2"><span><img loading="lazy" class="icn"
                        src="<?php echo get_template_directory_uri() ?>/img/calendar.svg" alt="sum"></span>
                    New Monthly Payment:&nbsp; <b>$270</b></div>
                  <div class="d-flex align-items-center mb-2"><span><img loading="lazy" class="icn"
                        src="<?php echo get_template_directory_uri() ?>/img/money-bag.svg" alt="sum"></span>
                    Total Savings:&nbsp; <b> $70,349</b></div>
                  <div class="d-flex align-items-center mb-2"><span><img loading="lazy" class="icn"
                        src="<?php echo get_template_directory_uri() ?>/img/low-price.svg" alt="sum"></span>
                    Debt Reduction:&nbsp; <b>81.2%</b></div>
                  <img loading="lazy" class="logo mt-2 float-end" src="<?php echo get_template_directory_uri() ?>/img/CredencenewLogo-6.png" alt="">
                </div>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>
  <div class="row justify-content-center my-4">
    <div class="col-8 col-md-4">
      <a href="#calc" class="btn btn-red text-white btn-lg rounded-pill fw-bold shadow w-100 py-3">GET FREE CONSULT</a>
    </div>
  </div>
  <br>

  <div class="container mt-lg-5">
    <div class="row justify-content-lg-start justify-content-center">
      <div class="col-auto mx-lg-0 mx-md-auto text-lg-start text-center">
        <h2 class="fw-bold txt-red text-sm-center">MAKES DEBT CONSOLIDATION</h2>
        <h3 class="fw-bold">EASY WITH:</h3>
      </div>
    </div>

    <div class="row justify-content-sm-center mt-130">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="fcard mx-auto">
          <div class="f-icn">
            <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/secure.svg" alt="secure">
            <span></span>
          </div>
          <h4 class="mt-3 fw-bold txt-blue">No Large Upfront Fee</h4>
          <p class="txt-blue">Unlike other Credit Counselling Companies, we do not charge large upfront fees.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt--160">
        <div class="fcard mx-md-0 mx-auto">
          <div class="f-icn">
            <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/downpay.svg" alt="secure">
            <span></span>
          </div>
          <h4 class="mt-3 fw-bold txt-blue">One low monthly payment for all debts</h4>
          <p class="txt-blue">We consolidate all your debts to one small monthly payment.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt--260">
        <div class="fcard mx-md-0 mx-auto">
          <div class="f-icn">
            <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/statistics.svg" alt="secure">
            <span></span>
          </div>
          <h4 class="mt-3 fw-bold txt-blue">Fast Pay-off plans (24-60 months)</h4>
          <p class="txt-blue">Lower your monthly payment to pay off your debt in 24 to 60 months.</p>
        </div>
      </div>
    </div>

    <div class="row justify-content-sm-center mt-130">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="fcard mx-auto">
          <div class="f-icn">
            <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/percentage.svg" alt="secure">
            <span></span>
          </div>
          <h4 class="mt-3 fw-bold txt-blue">Waived Interest Rates</h4>
          <p class="txt-blue">We can stop your interest so your full payment goes towards principal.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt--160">
        <div class="fcard mx-md-0 mx-auto">
          <div class="f-icn">
            <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/consultant.svg" alt="secure">
            <span></span>
          </div>
          <h4 class="mt-3 fw-bold txt-blue">Free Confidential Consultation</h4>
          <p class="txt-blue">Initial confidential consultation is always free from our Certified Credit Counsellor to
            make sure you can make a sound decision on choosing your option.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt--260">
        <div class="fcard mx-md-0 mx-auto">
          <div class="f-icn">
            <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/rating.svg" alt="secure">
            <span></span>
          </div>
          <h4 class="mt-3 fw-bold txt-blue">Guaranteed Customer Satisfaction</h4>
          <p class="txt-blue">Credence Credit guarantees to beat any offer in Ontario.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="blob5"></div>

  <footer>
    <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/wave.svg" alt=" credence cr footer">
    <div class="footer overflow-hidden">
      <div class="lg mx-auto my-3"><img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/CredencenewLogo-6.png" alt="logo credence credit">
      </div>
      <div class="text-center my-3">
        <img loading="lazy" height="18" class="mx-1" src="<?php echo get_template_directory_uri() ?>/img/loc.svg" alt="credence credit phone">
        <a class="text-decoration-none text-white"
          href="https://www.google.com/maps/dir//credence+credit+25+sheppard+avenue/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x882b2d649fc692f1:0xb908633c2fb0d80c?sa=X&ved=2ahUKEwig8qOwxY7uAhUD63MBHer7DaYQ9RcwC3oECBYQBA"
          target="_blank" rel="noopener noreferrer">
          300-25 Sheppard Ave <br> W North York Industiral,<br> ON, Canada M2N 6S8
        </a>
      </div>
      <div class="text-center">
        <img loading="lazy" height="18" class="mx-1" src="<?php echo get_template_directory_uri() ?>/img/phone-call.svg" alt="credence credit phone">
        <a class="text-decoration-none text-white" href="tel:647 352 3328" target="_blank" rel="noopener noreferrer">
          647 352 3328
        </a>
      </div>
      <div class="row justify-content-center mb-2 mt-4">
        <div class="col-lg-3 col-md-4 col-sm-8 col-8 my-5">
          <div class="d-flex justify-content-between">
            <div class="social"><a target="_blank" rel="noopener noreferrer"
                href="https://www.facebook.com/credencecredit/"><img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/facebook.svg"
                  alt="social"></a></div>
            <div class="social"><a target="_blank" rel="noopener noreferrer"
                href="https://www.linkedin.com/company/credence-credit"><img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/linkedin.svg"
                  alt="social"></a>
            </div>
            <div class="social"><a target="_blank" rel="noopener noreferrer"
                href="https://twitter.com/credencecredit"><img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/twitter.svg" alt="social"></a>
            </div>
            <div class="social"><a target="_blank" rel="noopener noreferrer"
                href="https://www.instagram.com/explore/locations/1900159150286258/credence-credit"><img loading="lazy"
                  src="<?php echo get_template_directory_uri() ?>/img/instagram.svg" alt="social"></a></div>
            <div class="social"><a target="_blank" rel="noopener noreferrer"
                href="https://www.youtube.com/channel/UCdhmXBYgMByUvycPeVpcEXA"><img loading="lazy"
                  src="<?php echo get_template_directory_uri() ?>/img/youtube.svg" alt="social"></a></div>
          </div>
        </div>
      </div>
      <div class="text-center my-3"><small><a target="_blank" rel="noopener noreferrer"
            href="https://www.ccredit.ca/terms-of-services/">Terms of
            Use</a> | <a target="_blank" rel="noopener noreferrer" href="https://www.ccredit.ca/privacy-policy/">Privacy
            Policy</a></small></div>
      <div class="text-center credit "><small>© 2019. All rights reserved Credence Credit owned by Credence Services
          Inc</small></div>
      <br>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
    crossorigin="anonymous"></script>

  <script src="https://unpkg.com/rangeable@latest/dist/rangeable.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/splide.min.js"></script>

  <script src="<?php echo get_template_directory_uri() ?>/assets/js/init.js"></script>
</body>

</html>