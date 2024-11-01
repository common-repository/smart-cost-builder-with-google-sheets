<style type="text/css">
/*	.hide{display: none!important;}*/
/*	[hide="1"]{display: none!important;}*/
/*	.sgsc-form-area{display: none!important}*/
    .config-error{
    	color: red;
    	font-weight: 600;
    	display: none;
    }

    [data-alert="0"]{display: none;}

	.sgsc-flex-2{
		display: flex;
		gap: 20px;
	}

	.sgsc-flex-2 > div:nth-child(1){width: 50%}
	.sgsc-flex-2 > div:nth-child(2){width: 50%}

	.sgsc-container-input{
		margin-bottom: 10px;
	}

	.sgsc-container-input input,
	.sgsc-container-input select,
	.sgsc-container-input textarea{
		width:100%;
		max-width: 200px;
	}

	.sgsc-container-input input.sgsc-full-width,
	.sgsc-container-input select.sgsc-full-width,
	.sgsc-container-input textarea.sgsc-full-width{
		width:100%;
		max-width: 100%;
		min-width: 450px;
	}

	.sgsc-container-input textarea.sgsc-full-width{
		width:100%;
		max-width: 100%;
		min-width: 500px;
		height: 60px;
	}



	.sgsc-container-input input::placeholder,.sgsc-container-input select::placeholder{
		font-size: 12px;
	}

	.sgsc-i-label{
		margin: 10px 0;
		font-weight: 600;
	}

	.sgsc-btn {
    background-color: var(--sgsc-green);
    padding: 9px;
    border: 1px solid var(--sgsc-green);
    color: white;
    width: 150px;
    font-family: var(--sgsc-default-font);
    cursor: pointer;
    font-size: 14px;
}

.sgsc-close {
    background-color: #e68888;
    border: 1px solid #e68888;
    color: #ffffff;
}


[data-cell-map]{
    color: #7d55ff;
    margin-left: 28px;
  }

  .sgsc-ele-items:hover{
  	transform: scale(1.2);
  	transition: 0.2s ease;
  	color: red;
  }
</style>