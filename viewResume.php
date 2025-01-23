<div class="modal-open" id="exampleModal">
  <div class="modal fade show d-flex align-items-center "  tabindex="-1" aria-labelledby="exampleModalLabel" style="display: block;">
    <div class="modal-dialog d-flex justify-content-center">
      <div class="modal-content" style=" min-width: 600px;">
        
          <header data-e2e="cashier-title-order-summary" class="tiktok-j1fbsm-HeaderOrderSummaryTitle ed1ryg40 d-flex justify-content-between ">
            Order summary
            <span class="tiktok-7d5x9b-SpanCloseContainer eooj1qy2" onclick="window.location.href='./?action=defaut';">
              <svg fill="currentColor" font-size="20px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.17 24L10.3 13.12a1 1 0 010-1.41l1.42-1.42a1 1 0 011.41 0L24 21.17 34.88 10.3a1 1 0 011.41 0l1.42 1.42a1 1 0 010 1.41L26.83 24 37.7 34.88a1 1 0 010 1.41l-1.42 1.42a1 1 0 01-1.41 0L24 26.83 13.12 37.7a1 1 0 01-1.41 0l-1.42-1.42a1 1 0 010-1.41L21.17 24z"></path>
              </svg>
            </span>
          </header>
        
       
        <div class="modal-body py-0">
        <div class="tiktok-197anyc-DivProfileRow ed1ryg42">
          <span data-e2e="cashier-account-title" class="tiktok-1ewhav3-SpanProfileDescription ed1ryg43">Account</span>
          <div class="tiktok-1vchfa7-DivProfileInfo ed1ryg44">
            
              <span data-e2e="cashier-user-name" class="tiktok-1nnllx5-SpanProfileUsername ed1ryg45"><?= $_GET["user"] ?></span>
            </div>
          </div>
        </div>
        <div class="tiktok-q8zfnj-DivOrderDetails ed1ryg46">
          <div data-e2e="cashier-coins-price" class="tiktok-19zzxh7-DivOrderSummaryContent ed1ryg41">
            <span><?= $_GET["coins"] ?> Coins</span>
            <span>€ <?= $_GET["price"] ?></span>
          </div>
          <div data-e2e="cashier-total-price" class="tiktok-1kkzega-DivOrderSummaryContent ed1ryg41">
            <span>Total</span>
            <span>€ <?= $_GET["price"] ?></span>
          </div>
        </div>

        <div class="tiktok-qov981-DivLoadingWrapper eezq8x00">
          
          <div data-theme="light" dir="ltr"><div class="pipo pipo-pc pc-payment" data-sel="pipo-pc-payment-methods-wrapper" style="direction: ltr;">
          
            <div class="pc-payment-container px-3">
              <div class="pc-payment-header">
                
                <div class="pc-payment-list my-3">
                  <div class="pc-payment-list-title d-flex justify-content-between align-items-center">
                    <span>Select a payment method</span>
                    <button type="button" data-e2e="cashier-payment-method-entrance" class="e1iq5zev1 tiktok-1s7gs5w-Button-StyledCardManageBtn ehk74z00">Manage</button>
                  </div>
                </div>
                <form action="./?action=paiement" method="post">
              <div class="pc-payment-list pc-payment-list-bottom">
                <div class="pc-payment-item" data-sel="pipo-pc-pi-other-visa">
                  <div class="arco-row arco-row-align-center arco-row-justify-space-between pc-payment-item-content ">
                  
                    <div class="pc-payment-item-left flex-col"><div class="flex">
                    
                     
                      <label class="arco-radio ">
                        <input type="radio" value="Visa" name="payment">
                        <span class="arco-icon-hover arco-radio-icon-hover arco-radio-mask-wrapper">
                          <div class="arco-radio-mask"></div>
                         
                        </span>
                      
                      </label>
                      <div class="pc-payment-item-label" style="margin-left: 0px; direction: ltr;">Credit / debit card</div>
                      <div class="pc-payment-item-tag"></div>
                    </div>
                    <div id="myDiv" class="hide">*********<?=getCreditCardNumber()?></div>
                  </div>
                  <div class="pc-payment-item-right " style="overflow: hidden;">
                    <img alt="payment-method-icon" class="pc-payment-item-right-img ml-6" src="https://lf16-co.g-p-static.com/obj/pipo-sgcompliance/sky/visa_light_c558fb.svg">
                    <img alt="payment-method-icon" class="pc-payment-item-right-img ml-6" src="https://lf16-co.g-p-static.com/obj/pipo-sgcompliance/sky/mastercard-gray-update_7b3ceb.svg">
                    <img alt="payment-method-icon" class="pc-payment-item-right-img ml-6" src="https://lf16-co.g-p-static.com/obj/pipo-sg/sky/maestro_188b29.svg">
                    <img alt="payment-method-icon" class="pc-payment-item-right-img ml-6" src="https://lf16-co.g-p-static.com/obj/pipo-sg/sky/card_american_express_v1_429e0f.svg">
                  </div>
                </div>
              </div>
              <div class="pc-payment-item pc-payment-item-selected" data-sel="pipo-pc-pi-other-paypal">
                <div class="arco-row arco-row-align-center arco-row-justify-space-between pc-payment-item-content ">
                  <div class="pc-payment-item-left flex-col">
                    <div class="flex">
                      <label class="arco-radio arco-radio-checked">
                        <input type="radio" value="PayPal" name="payment" checked>
                        <span class="arco-icon-hover arco-radio-icon-hover arco-icon-hover-disabled arco-radio-mask-wrapper">
                          <div class="arco-radio-mask"></div>
                        </span>
                      </label>
                      <div class="pc-payment-item-label" style="margin-left: 0px; direction: ltr;">PayPal</div>
                      <div class="pc-payment-item-tag"></div>
                    </div>
                  </div>
                  <div class="pc-payment-item-right flex-grow" style="overflow: inherit;">
                  <img alt="payment-method-icon" class="pc-payment-item-right-img ml-6" src="https://lf16-co.g-p-static.com/obj/pipo-sgcompliance/sky/paypal-light-bg_6724b7.svg"></div>
                </div>
                <div class="pc-payment-item-extra" style="margin-left: 45px;"></div>
              </div>
            </div>
          </div>
         
               
              </div>
            </div>
          </div>

        <footer class="tiktok-1quj9yy-FooterContainer epvo4190">
              <div class="tiktok-84khz2-DivCashierFooterTextContainer epvo4197">
                <div class="tiktok-iybfny-DivCheckboxConfirm epvo4196">
                    <label class="tiktok-y6j4rp-LabelCheckbox e1n12dme0">
                      <div class="checkbox-symbol selected tiktok-14kflqd-DivCheckboxSymbol e1n12dme1" style="width: 16px; height: 16px;">
                      <input type="checkbox" class="tiktok-m1sz65-InputCheckbox e1n12dme2" style="width: 16px; height: 16px; border-radius: 2px;">
                      <div class="tiktok-9o06s5-DivCheckboxIcon e1n12dme3" style="width: 10px; height: 10px;">
                      <svg width="10" data-e2e="" height="10" viewBox="0 0 16 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9637 0.370662C14.1617 0.168152 14.4882 0.170371 14.6834 0.375552L15.6676 1.40986C15.8531 1.60483 15.851 1.91164 15.6629 2.10407L6.33538 11.644C5.86141 12.1288 5.09629 12.1169 4.6365 11.6177L0.326723 6.93829C0.144403 6.74033 0.151478 6.43358 0.342731 6.24424L1.35546 5.24162C1.55673 5.04237 1.88315 5.0499 2.07502 5.25822L5.5238 9.0028L13.9637 0.370662Z"></path>
                      </svg>
                    </div>
                    </div>
                  </label>
              </div>
              <div data-e2e="cashier-treaty-text" class="tiktok-1lkcylx-DivCashierFooterText epvo4191">
                  <span class="tiktok-2mck4x-TextContainer eblccp10">By ticking the box, I agree to the <a class="tiktok-1w73l1x-ACashierFooterLink epvo4192">Coins Policy</a> and request the immediate credit of Coins to my account. I acknowledge that I will lose my right of withdrawal once I have used the Coins, at which point the contract has been fully performed.
                    <div class="tiktok-l41yxy-DivRegionChangeText epvo4198">By continuing this purchase, you confirm that you live in&nbsp;
                      <span class="tiktok-5ae24z-TextContainer eblccp10"><?=getCountry()?></span>.
                    </div>
                  </span>
              </div>
            </div>
            <div class="tiktok-k6ibtx-DivButtonsContainer epvo4193">
              <button type="button" data-e2e="cashier-faq-icon" class="epvo4195 tiktok-1nf9zwy-Button-StyledCashierHelpButton ehk74z00">
                <svg width="1em" data-e2e="" height="1em" viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M24 6C14.0589 6 6 14.0589 6 24C6 33.9411 14.0589 42 24 42C33.9411 42 42 33.9411 42 24C42 14.0589 33.9411 6 24 6ZM2 24C2 11.8497 11.8497 2 24 2C36.1503 2 46 11.8497 46 24C46 36.1503 36.1503 46 24 46C11.8497 46 2 36.1503 2 24ZM24.0909 15C22.172 15 20.3433 16.2292 19.2617 18.61C19.0332 19.1128 18.4726 19.4 17.9487 19.2253L16.0513 18.5929C15.5274 18.4182 15.2406 17.8497 15.4542 17.3405C16.9801 13.7031 20.0581 11 24.0909 11C28.459 11 32 14.541 32 18.9091C32 21.2138 30.7884 23.4606 29.2167 25.074C27.8157 26.5121 25.5807 27.702 22.9988 27.9518C22.4491 28.0049 22.0001 27.5523 22.0001 27V25C22.0001 24.4477 22.4504 24.0057 22.9955 23.9167C24.2296 23.7153 25.5034 23.1533 26.3515 22.2828C27.4389 21.1666 28 19.8679 28 18.9091C28 16.7502 26.2498 15 24.0909 15ZM24 36C22.3431 36 21 34.6569 21 33C21 31.3431 22.3431 30 24 30C25.6569 30 27 31.3431 27 33C27 34.6569 25.6569 36 24 36Z"></path>
                </svg>
              </button>
              <div>
                
                  <input type="hidden" name="user" value="<?= $_GET["user"] ?>">
                  <input type="hidden" name="coins" value="<?= $_GET["coins"] ?>">
                  <input type="hidden" name="price" value="<?= $_GET["price"] ?>">
                  <button type="submit" data-e2e="cashier-paynow-button" class="epvo4194 tiktok-aeo2ro-Button-StyledPayButton ehk74z00">Pay now</button>
                </form>
              </div>
            </div>
        </footer>

      </div>
    </div>
  </div>
</div>
<div class="modal-backdrop fade show"></div>