<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style> body {
    margin: 0;
    line-height: normal;
  }
  
  .popup-overlay {
    display: flex;
    flex-direction: column;
    position: fixed;
    inset: 0;
  }
  
  :root {
    /* fonts */
    --font-neue-montreal: "Neue Montreal";
    --font-roslindale-variable: "Roslindale Variable";
    --font-inter: Inter;
  
    /* font sizes */
    --font-size-61xl-9: 80.9px;
    --font-size-11xl: 30px;
    --font-size-31xl: 50px;
    --font-size-3xl: 22px;
    --font-size-16xl: 35px;
    --font-size-11xl-9: 30.9px;
    --font-size-41xl: 60px;
    --font-size-lgi-1: 19.1px;
    --font-size-xs-8: 11.8px;
  
    /* Colors */
    --color-gainsboro-100: #d9d9d9;
    --color-gainsboro-200: #d8d9da;
    --color-gray-100: #272829;
    --color-gray-200: rgba(39, 40, 41, 0.8);
    --color-gray-300: rgba(39, 40, 41, 0.6);
    --color-gray-400: rgba(39, 40, 41, 0.4);
    --color-black: #000;
    --color-cornflowerblue: #79a7ff;
  
    /* Gaps */
    --gap-56xl: 75px;
    --gap-36xl: 55px;
    --gap-lgi: 19px;
    --gap-base: 16px;
    --gap-5xs: 8px;
    --gap-46xl: 65px;
    --gap-91xl: 50px;
    --gap-xl: 10px;
    --gap-31xl: 50px;
    --gap-26xl: 45px;
    --gap-3xs: 10px;
    --gap-10xs: 3px;
  
    /* Paddings */
    --padding-21xl: 40px;
    --padding-11xl: 30px;
    --padding-41xl: 60px;
    --padding-45xl: 64px;
    --padding-3xs: 10px;
    --padding-66xl: 50px;
    --padding-smi: 13px;
  
    /* Border radiuses */
    --br-31xl: 50px;
    --br-xl: 20px;
    --br-5xs: 8px;
    --br-8xs: 5px;
  }

  .vectors-wrapper-icon {
    width: 666px;
    height: 911px;
    overflow: hidden;
    flex-shrink: 0;
    object-fit: cover;
  }
  .logo-icon4 {
    position: relative;
    width: 68px;
    height: 68.4px;
    object-fit: cover;
  }
  .thebikeplace4 {
    margin-block-start: 0;
    margin-block-end: 4px;
  }
  .database {
    margin: 0;
    font-size: var(--font-size-3xl);
    line-height: 118.18%;
  }
  .thebikeplace-database {
    position: relative;
    letter-spacing: -0.01em;
    font-weight: 300;
    text-shadow: 0.3px 0 0#272829, 0 0.3px 0#272829, -0.3px 0 0#272829,
      0-0.3px 0#272829;
  }
  .vectors-wrapper {
    width: 175px;
    height: 128.4px;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  .vectors-wrapper-wrapper {
    border-radius: 0 var(--br-xl) var(--br-xl) 0;
    background-color: var(--color-gainsboro-200);
    border: 3px solid var(--color-gray-200);
    box-sizing: border-box;
    height: 911px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 33px 211px;
    z-index: 0;
  }
  .email3 {
    position: relative;
    letter-spacing: -0.01em;
    font-weight: 500;
  }
  .email-child {
    border: 2px solid var(--color-gray-300);
    outline: 0;
    background-color: transparent;
    position: relative;
    border-radius: var(--br-8xs);
    box-sizing: border-box;
    width: 406.5px;
    height: 56.1px;
    padding: 10px;
  }
  .password {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: var(--gap-10xs);
    padding: 10px;
  }
  .log-in {
    position: relative;
    font-size: var(--font-size-lgi-1);
    line-height: 140%;
    font-weight: 500;
    font-family: var(--font-neue-montreal);
    color: #fff;
    text-align: left;
  }
  .button3 {
    cursor: pointer;
    border: 0;
    padding: 12px 24px;
    background-color: var(--color-cornflowerblue);
    border-radius: var(--br-8xs);
    width: 266px;
    height: 48px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
  }
  .button-wrapper,
  .forgot-your-password {
    cursor: pointer;
    border: 0;
    padding: 0;
    background-color: transparent;
  }
  .button-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
  }
  .forgot-your-password {
    position: relative;
    font-size: 14px;
    letter-spacing: -0.01em;
    font-weight: 500;
    font-family: var(--font-neue-montreal);
    color: #4181fc;
    text-align: left;
    display: inline-block;
  }
  .email-parent,
  .forgot {
    display: flex;
    align-items: center;
    justify-content: flex-start;
  }
  .forgot {
    cursor: pointer;
    border: 0;
    padding: 0;
    background-color: transparent;
    flex-direction: row;
  }
  .email-parent {
    margin: 0 !important;
    position: absolute;
    top: 265px;
    left: 95.5px;
    flex-direction: column;
    gap: 18px;
    z-index: 1;
    text-align: left;
    font-size: var(--font-size-xs-8);
    color: var(--color-gray-200);
    font-family: var(--font-neue-montreal);
  }
  .frame-parent2,
  .vectors-wrapper-parent {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
  }
  .frame-parent2 {
    justify-content: center;
    position: relative;
    gap: var(--gap-3xs);
  }
  .vectors-wrapper-parent {
    position: absolute;
    top: 56.5px;
    left: calc(50% - 653px);
    justify-content: flex-start;
    gap: 43px;
  }
  .login {
    position: relative;
    background-color: var(--color-gainsboro-200);
    width: 100%;
    height: 1024px;
    overflow: hidden;
    text-align: center;
    font-size: 40px;
    color: var(--color-gray-100);
    font-family: var(--font-roslindale-variable);
  }


  .logo-icon3 {
    position: relative;
    width: 42.4px;
    height: 42.7px;
    object-fit: cover;
  }
  .thebikeplace3 {
    position: relative;
    letter-spacing: -0.01em;
    font-weight: 300;
    text-shadow: 0.3px 0 0#272829, 0 0.3px 0#272829, -0.3px 0 0#272829,
      0-0.3px 0#272829;
  }
  .logo3 {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: var(--gap-5xs);
  }
  .vector-icon6 {
    position: relative;
    width: 34.1px;
    height: 34.1px;
  }
  .order4 {
    position: relative;
    font-size: var(--font-size-3xl);
    letter-spacing: -0.01em;
    font-family: var(--font-neue-montreal);
    color: var(--color-gray-100);
    text-align: left;
    
  }
  .dashboard3 {
    cursor: pointer;
    border: 0;
    padding: 0;
    background-color: transparent;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: var(--gap-base);
  }
  .vector-icon7 {
    position: relative;
    width: 36.9px;
    height: 36.9px;
  }
  .inventory8 {
    cursor: pointer;
    border: 0;
    padding: 0;
    background-color: transparent;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: var(--gap-lgi);
  }
  .management-icon3,
  .total-sales-icon3 {
    position: relative;
    width: 36.9px;
    height: 36.7px;
    object-fit: cover;
  }
  .management-icon3 {
    height: 36.9px;
  }
  .dashboard-parent1,
  .frame-div {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: var(--gap-36xl);
  }
  .frame-div {
    position: absolute;
    top: -1.9px;
    left: -2px;
    background-color: var(--color-gainsboro-200);
    border: 2px solid var(--color-gray-300);
    box-sizing: border-box;
    height: 1084px;
    overflow: hidden;
    align-items: center;
    padding: var(--padding-21xl) var(--padding-11xl);
    gap: var(--gap-56xl);
  }
  .orders {
    position: relative;
    letter-spacing: 0.03em;
    margin-left: 40px;
  }
  .create-new {
    position: relative;
    font-size: var(--font-size-11xl);
    font-family: var(--font-neue-montreal);
    color: var(--color-gray-100);
    text-align: left;
  }
  .cn-button,
  .orders-parent {
    display: flex;
    flex-direction: row;
    align-items: center;
  }
  .cn-button {
    cursor: pointer;
    border: 1px solid var(--color-gray-100);
    padding: var(--padding-smi) var(--padding-11xl);
    background-color: var(--color-cornflowerblue);
    border-radius: var(--br-5xs);
    box-sizing: border-box;
    height: 52px;
    overflow: hidden;
    justify-content: center;
  }
  .orders-parent {
    justify-content: flex-start;
    gap: 590px;
  }
  .frame-inner {
    position: relative;
    border-radius: var(--br-xl);
    width: 1099.3px;
    height: 830.1px;
    z-index: 0;
  }
  .product-summary1 {
    position: absolute;
    margin: 0 !important;
    top: 0px;
    left: 43.2px;
    font-weight: 500;
    z-index: 1;
  }
  .orderid-item {
    position: relative;
    border-radius: 2px;
    background-color: var(--color-gainsboro-100);
    border: 2px solid var(--color-gray-100);
    box-sizing: border-box;
    width: 23.7px;
    height: 23.7px;
  }
  .orderid5 {
    position: relative;
    font-weight: 500;
  }
  .orderid4 {
    flex-direction: row;
    align-items: center;
    gap: var(--gap-3xs);
  }
  .frame-parent1,
  .ids5,
  .orderid4,
  .vector-parent {
    display: flex;
    justify-content: flex-start;
  }
  .ids5 {
    margin: 0 !important;
    position: absolute;
    top: 115px;
    left: 43.2px;
    flex-direction: row;
    align-items: center;
    gap: 88px;
    z-index: 2;
    font-size: var(--font-size-lgi-1);
    color: var(--color-black);
  }
  .frame-parent1,
  .vector-parent {
    flex-direction: column;
    align-items: flex-start;
    position: relative;
    gap: var(--gap-3xs);
    font-size: var(--font-size-11xl-9);
  }
  .frame-parent1 {
    position: absolute;
    top: 48.5px;
    left: 302px;
    gap: var(--gap-26xl);
    font-size: var(--font-size-31xl);
    font-family: var(--font-neue-montreal);
  }
  .order3 {
    background-color: var(--color-gainsboro-200);
    width: 100%;
    height: 1024px;
    overflow: hidden;
    text-align: left;
    font-size: var(--font-size-16xl);
    color: var(--color-gray-100);
    font-family: var(--font-roslindale-variable);
  }
  .create-new-order,
  .order3,
  .orderid-child {
    position: relative;
    align-items: left;
  }

  .create-new-order{
    font-size: 25px;
  }
  .orderid-child {
    border: 1px solid var(--color-black);
    outline: 0;
    background-color: transparent;
    box-sizing: border-box;
    width: 330px;
    height: 44.3px;
  }
  .orderid {
    display: flex;
    flex-direction: row;
    align-items: left;
    justify-content: left;
    gap: var(--gap-31xl);
  }
  .create-new-order-parent,
  .ids {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
  }
  .ids {
    align-self: stretch;
    align-items: flex-end;
    gap: var(--gap-xl);
    font-size: var(--font-size-11xl-9);
    color: var(--color-black);
  }
  .create-new-order-parent {
    width: 602px;
    height: 570px;
    align-items: left;
    gap: var(--gap-91xl);
  }
  .create {
    position: relative;
    font-size: var(--font-size-11xl-9);
    font-weight: 500;
    font-family: var(--font-inter);
    color: var(--color-black);
    text-align: left;
  }
  .button,
  .frame-parent {
    overflow: hidden;
    display: flex;
  }
  .button {
    cursor: pointer;
    border: 1px solid var(--color-gray-100);
    padding: var(--padding-3xs) var(--padding-66xl);
    background-color: var(--color-cornflowerblue);
    border-radius: var(--br-31xl);
    flex-direction: row;
    align-items: center;
    justify-content: center;
  }
  .frame-parent {
    position: relative;
    background-color: var(--color-gainsboro-100);
    border: 1px solid var(--color-black);
    box-sizing: border-box;
    flex-direction: column;
    align-items: flex-end;
    justify-content: flex-start;
    padding: var(--padding-41xl) var(--padding-45xl);
    gap: var(--gap-46xl);
    max-width: 90%;
    max-height: 90%;
    text-align: left;
    font-size: var(--font-size-41xl);
    color: var(--color-gray-100);
    font-family: var(--font-inter);
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 60px;
    justify-content: space-between;
    margin-left: 40px;
  }
  
  table, th, td {
    border: 1px solid #353535;
  }
  
  th, td {
    padding: 15px;
    text-align: center;
    font-size: 18px;
  }
  
  th {
    font-size: 22px;
    font-weight: normal;
    padding-left: 48px;
    padding-right: 48px;
  }

  
  
  </style>


  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roslindale Variable:wght@300&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Neue Montreal:wght@300;400;500;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" />
</head>
<body>
 @yield('content')

</body>
</html>