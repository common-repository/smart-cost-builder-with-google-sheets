<style type="text/css">
  .btn {
    font-family: var(--default-font);
    background-color: var(--btns);
    color: white;
    border: 1px solid var(--btns);
    border-radius: 12px;
    padding: 9px;
    font-size: 14px;
    width: 100%;
    max-width: 275px;
    /* height: 50px; */
    cursor: pointer;
    outline: none;
}



/* Darker background on mouse-over */
.btn:hover {

  outline: none;
  background-color: var(--btns-hover);
  border:1px solid var(--btns-hover);
  color: black;
  transition: 0.4s;
/*  transform: scale(0.9);*/
}



.sgsc-calculator-icon:after{
        content:"\00a0 \f1ec";
        font-family: "Font Awesome 5 Pro";
        font-weight: 900;

    }

.sgsc-right-arrow-icon:after{
        content:"\00a0 \f324";
        font-family: "Font Awesome 5 Pro";
        font-weight: 900;

    }    

input.khyzer,select.khyzer, textarea.khyzer {
    width: 100%;
    max-width: 100%;
    min-width: 250px;
    font-family: var(--default-font);
    font-size: 16px;
    font-weight: 500;
    height: auto;
    padding: 12px;
    border: 0px solid white;
    /* border-bottom: 1.5px solid #8e959f; */
    color: var(--input-text);
    background-color: transparent;
    border-radius: 6px;
    box-sizing: border-box;
    resize: vertical;
    text-align: left;
    margin-top: 5px;
}

select.khyzer{
        padding: 8px 12px;
        text-align: left;
        text-align-last: left;
} 

select option { 
  padding: 8px;
  cursor: pointer;
  background-color: #4b4b4b;
  color: white;
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
font-family: var(--default-font);
        font-size: 14px;
  color: rgb(255, 255, 255,0.5);
  opacity: 0.9; /* Firefox */
}


.sgsc-table{
  width: 100%;
  text-align: center;
  border-spacing: 1px;
}

.sgsc-table td{
   padding: 4px;
}

.sgsc-table thead td{
   background-color: var(--theme);
   color: white;
   font-weight: 400;
}



 @media screen and (max-width: 600px) {


}
</style>