<style type="text/css">
  :root{
    --blue:#4520eb;
    --background:#161616;
    --theme: <?php echo $app["color"];?>;
    
    --input-text:var(--theme);
    --btns: var(--theme);
    --sliders: var(--theme);
    --btns-hover:#ffdbb5;

--default-font:"Montserrat", sans-serif;

--series-1:#FCD202;
--series-2:#B0DE09;
--series-3:#FF6600;

--calc-width: <?php echo $app["cal-width"];?>px;
--left-width:<?php echo $app["left-width"].'%'; ?>;
--right-width:<?php echo $app["right-width"].'%'; ?>;
--slider-float:<?php echo $app["slider-float"]; ?>;
--step-3-mg-top:<?php echo $app["step-3-mg-top"]; ?>;
  
--checkbox-margin: <?php echo $app["checkbox-margin"]; ?>;
--checkbox-max-width: <?php echo $app["checkbox-max_w"]; ?>;
  }

  
  .hide,[hide="1"]{display: none;}

  .s3-spacer{height:var(--step-3-mg-top);} 
  .noselect {
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
}

.h2 {
    font-size: 16px;
/*    padding: 12px 0;*/
}
</style>

<style type="text/css">
  [align-center="1"]{text-align: center;}
  [align-center="1"] .input-container{margin: auto;}
</style>

<style type="text/css">
 .round-corners{border-radius: 12px;}
/* #step-2{padding: 0 20px;}*/

  [flexer="1"]{
    display: flex;
    gap: 20px;
  }

  [flexer="1"] > div:nth-child(1){width: var(--left-width);border:0px solid red;min-width: 350px;}
  [flexer="1"] > div:nth-child(2){width: var(--right-width);border:0px solid red;margin-left: 50px;}


@media screen and (max-width: 600px) {
  [flexer="1"]{
    flex-direction: column;
  }

  [flexer="1"] > div:nth-child(1){width: 100%;max-width: 1200px;min-width:revert;}
  [flexer="1"] > div:nth-child(2){width: 100%;margin-left: revert;}
}
</style>



<style type="text/css">
  body{
        font-family: var(--default-font);
  }

  .main {
    margin: auto;
    width: 100%;
/*    min-width: fit-content;*/
    max-width: var(--calc-width);
    font-family: var(--default-font);
    font-size: 16px;
/*    background-color: white;*/
    /* border: 1px solid red; */
    font-weight: 300;
/*    color: white;*/
}

  [card="1"]{
    box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2);
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding: 20px;
}

/*  .pd{padding: 20px;}*/


</style>




<style type="text/css">
  input.fieldset-input[type=text], select.fieldset-input {
    border: 0;
    width: 100%;
    background-color: transparent;
    text-align: left;
    padding: 15px 0px 0 33px;
    color: var(--theme);
    outline: none;
    font-size: 16px;
    font-family: var(--default-font);
    font-weight: 500;
}

    input.fieldset-input[type=text]::placeholder{
             font-family: var(--default-font);
             letter-spacing: 0px;
             color: #778187;

    }

    .input-block{
       margin-bottom: 20px; 
}

    .input-container {
    border: 0.125rem solid var(--theme);
    width: 100%;
    max-width: 350px;
    position: relative;
    padding: 4px 0;
/*    margin: 0px 0 30px 0;*/
}

.btn-container{border:0;}

.input-label {
    display: block;
    position: absolute;
    background-color: white;
    margin-top: -16px;
    margin-left: 15px;
    padding: 0 16px;
    font-family: 'Montserrat', sans-serif;
    color: black;
    font-size: 14px;
    font-weight: 600;
}

</style>

<style type="text/css">
  .ui-tooltip{
    background-color:black;
    color: white;
    font-size: 12px;
    border: 1px solid black;
    font-family: var(--default-font);
    border-radius: 4px;
  }

  .ui-tooltip a{color: white;text-decoration: underline;}

  .ui-widget.ui-widget-content {
    border: 1px solid #000000;
}

.ui-widget-shadow {
     -webkit-box-shadow: 0px 0px 0px #666666; 
     box-shadow: 0px 0px 0px #666666; 
}

 .sgsr_green_txt {
    font-size: 12px;
    font-weight: 600;
    text-align: center;
    padding: 14px;
    background-color: #17cf671c;
    margin-top: 25px;
}

.sgsc-blue{color: var(--btns);}
</style>

<style type="text/css">
  .loader {
  border: 5px solid #f3f3f3;
    -webkit-animation: spin 1s linear infinite;
    animation: spin 1s linear infinite;
    border-top: 5px solid var(--theme);
    border-radius: 50%;
    width: 30px;
    height: 30px;
  
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.flash {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}
</style>


<style type="text/css">
  @media screen and (max-width: 600px) {
}
</style>

