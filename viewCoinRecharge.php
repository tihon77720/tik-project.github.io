<?php 
            
            if (isset($_GET["status"])) {
              switch ($_GET["status"]) {
                case 'success':
                  include "$racine/view/viewResume.php";
                  break;
                case 'PaiementAccepted':
                  include "$racine/view/viewSuccess.php";
                  break;
                case 'error':
                case 'Processing':
                  include "$racine/view/viewProcessing.php";
                  break;
                case 'error':
                  echo '<p class="text-danger"> Une erreur est survenue. </p>';
                  break;

              }
              

            }
            
            
            ?>


<div class="container" style="margin-top: 60px; padding: 24px 0px;">
    <div class="container" style="padding: 32px 0px; width: 1140px;">
        <section>
            <div class="d-flex justify-content-between" style="height: 24px; ">
                <h1 style="font-size: 24px; color: rgb(22, 24, 35);  font-weight: 700; line-height: 28px; margin: 0px;">Get Coins</h1>
                <a href="./?action=transaction-history" style="font-size: 16px; color: rgb(22, 24, 35);letter-spacing: 0.03px;line-height: 22px;font-weight: 700;">View transaction history</a>
            </div>
            <div class="d-flex justify-content-between" style="margin-top: 20px; gap: 8px;">
            <form action="./?action=recharge" method="post">
                <div class="tiktok-d2sjra-DivProfileInfo e1sanywi9 d-flex flex-row">
                  
                
                    <input id="inputUsername" type="text" class="searchInput px-2"  placeholder="<?php 
                        if (isset($_GET["user"])) {
                            echo $_GET["user"];
                        }else{
                            echo "Enter username";
                        }
                    
                    ?>" name="user" required >
                    <div class="d-flex aligne-item-center justify-content-center">
                        <span class="d-flex align-items-center"><svg onclick="reset()" width="16" data-e2e="" height="16" viewBox="0 0 48 48" fill="rgba(22, 24, 35, .34)" xmlns="http://www.w3.org/2000/svg" style="margin: 0px 12px;"><path fill-rule="evenodd" clip-rule="evenodd" d="M24 46C36.1503 46 46 36.1503 46 24C46 11.8497 36.1503 2 24 2C11.8497 2 2 11.8497 2 24C2 36.1503 11.8497 46 24 46ZM15.1466 30.7323L21.8788 24.0001L15.1466 17.2679C14.756 16.8774 14.756 16.2442 15.1466 15.8537L15.8537 15.1466C16.2442 14.756 16.8774 14.756 17.2679 15.1466L24.0001 21.8788L30.7323 15.1466C31.1229 14.756 31.756 14.756 32.1466 15.1466L32.8537 15.8537C33.2442 16.2442 33.2442 16.8774 32.8537 17.2679L26.1214 24.0001L32.8537 30.7323C33.2442 31.1229 33.2442 31.756 32.8537 32.1466L32.1466 32.8537C31.756 33.2442 31.1229 33.2442 30.7323 32.8537L24.0001 26.1214L17.2679 32.8537C16.8774 33.2442 16.2442 33.2442 15.8537 32.8537L15.1466 32.1466C14.756 31.756 14.756 31.1229 15.1466 30.7323Z"></path></svg></span>
                    </div>
                    
                </div>
            </div>
        </section>
        <div class="recharge">Recharge</div>
        <div style="margin: 12px 0px 10px;">
            <ol data-e2e="wallet-coins-packages" class="tiktok-1a7iizi-OlCoinsListContainer eyr93xl2">
                <li>
                    <button type="button" aria-label="70 Pièces" aria-selected="true" class="tiktok-l4v9n8-ButtonContainer e4yj8b60">
                        <div class="tiktok-16jd2dh-DivNumContainer e4yj8b61">
                            <span data-e2e="wallet-package-coin-icon-0" class="tiktok-240y52-SpanNumIcon e4yj8b62">
                                <svg class="tiktok-kkwvro-StyledCoinIcon e4yj8b611" width="1em" data-e2e="" height="1em" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="22" fill="#FFEC9B"></circle>
                                    <circle cx="24" cy="24" r="17" fill="#FACE15"></circle>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.9347 25.5C40.9779 25.0058 41 24.5055 41 24C41 14.6112 33.3888 7 24 7C14.6112 7 7 14.6112 7 24C7 24.5055 7.02206 25.0058 7.06527 25.5C7.82466 16.8137 15.1166 10 24 10C32.8834 10 40.1753 16.8137 40.9347 25.5Z" fill="#FABC15"></path>
                                    <path d="M33 19C30.2041 19 27.9375 16.7614 27.9375 14H24.5625V27.6111C24.5625 29.2986 23.1774 30.6667 21.4688 30.6667C19.7601 30.6667 18.375 29.2986 18.375 27.6111C18.375 25.9236 19.7601 24.5556 21.4688 24.5556C21.722 24.5556 21.9659 24.5853 22.1981 24.6406C22.2365 24.6497 22.2747 24.6596 22.3125 24.6701V21.2763C22.0358 21.2406 21.7541 21.2222 21.4688 21.2222C17.8962 21.2222 15 24.0826 15 27.6111C15 31.1396 17.8962 34 21.4688 34C25.0413 34 27.9375 31.1396 27.9375 27.6111V20.6673C29.3477 21.7134 31.1005 22.3333 33 22.3333V19Z" fill="#FEF5CD"></path>
                                </svg>
                            </span>
                            <span data-e2e="wallet-package-coin-num-0" class="tiktok-10lqs59-SpanNumDisplay e4yj8b63" data-span-id="coins">70</span>
                        </div>
                        <div class="tiktok-1uetk1w-DivTextContainer e4yj8b64">
                            <span data-e2e="wallet-package-price-0"  class="tiktok-hpayk8-SpanTextNow e4yj8b66">€ <span data-span-id="price">0.85   </span></span>
                        </div>
                    </button>
                </li>
                <li>
                    <button type="button" aria-label="70 Pièces" aria-selected="true" class="tiktok-l4v9n8-ButtonContainer e4yj8b60">
                        <div class="tiktok-16jd2dh-DivNumContainer e4yj8b61">
                            <span data-e2e="wallet-package-coin-icon-0" class="tiktok-240y52-SpanNumIcon e4yj8b62">
                                <svg class="tiktok-kkwvro-StyledCoinIcon e4yj8b611" width="1em" data-e2e="" height="1em" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="22" fill="#FFEC9B"></circle>
                                    <circle cx="24" cy="24" r="17" fill="#FACE15"></circle>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.9347 25.5C40.9779 25.0058 41 24.5055 41 24C41 14.6112 33.3888 7 24 7C14.6112 7 7 14.6112 7 24C7 24.5055 7.02206 25.0058 7.06527 25.5C7.82466 16.8137 15.1166 10 24 10C32.8834 10 40.1753 16.8137 40.9347 25.5Z" fill="#FABC15"></path>
                                    <path d="M33 19C30.2041 19 27.9375 16.7614 27.9375 14H24.5625V27.6111C24.5625 29.2986 23.1774 30.6667 21.4688 30.6667C19.7601 30.6667 18.375 29.2986 18.375 27.6111C18.375 25.9236 19.7601 24.5556 21.4688 24.5556C21.722 24.5556 21.9659 24.5853 22.1981 24.6406C22.2365 24.6497 22.2747 24.6596 22.3125 24.6701V21.2763C22.0358 21.2406 21.7541 21.2222 21.4688 21.2222C17.8962 21.2222 15 24.0826 15 27.6111C15 31.1396 17.8962 34 21.4688 34C25.0413 34 27.9375 31.1396 27.9375 27.6111V20.6673C29.3477 21.7134 31.1005 22.3333 33 22.3333V19Z" fill="#FEF5CD"></path>
                                </svg>
                            </span>
                            <span data-e2e="wallet-package-coin-num-0" class="tiktok-10lqs59-SpanNumDisplay e4yj8b63" data-span-id="coins">350</span>
                        </div>
                        <div class="tiktok-1uetk1w-DivTextContainer e4yj8b64">
                            <span data-e2e="wallet-package-price-0" class="tiktok-hpayk8-SpanTextNow e4yj8b66">€ <span data-span-id="price" >4.15</span></span>
                        </div>
                    </button>
                </li>
                <li>
                    <button type="button"  aria-label="70 Pièces" aria-selected="true" class="tiktok-l4v9n8-ButtonContainer e4yj8b60">
                        <div class="tiktok-16jd2dh-DivNumContainer e4yj8b61">
                            <span data-e2e="wallet-package-coin-icon-0" class="tiktok-240y52-SpanNumIcon e4yj8b62">
                                <svg class="tiktok-kkwvro-StyledCoinIcon e4yj8b611" width="1em" data-e2e="" height="1em" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="22" fill="#FFEC9B"></circle>
                                    <circle cx="24" cy="24" r="17" fill="#FACE15"></circle>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.9347 25.5C40.9779 25.0058 41 24.5055 41 24C41 14.6112 33.3888 7 24 7C14.6112 7 7 14.6112 7 24C7 24.5055 7.02206 25.0058 7.06527 25.5C7.82466 16.8137 15.1166 10 24 10C32.8834 10 40.1753 16.8137 40.9347 25.5Z" fill="#FABC15"></path>
                                    <path d="M33 19C30.2041 19 27.9375 16.7614 27.9375 14H24.5625V27.6111C24.5625 29.2986 23.1774 30.6667 21.4688 30.6667C19.7601 30.6667 18.375 29.2986 18.375 27.6111C18.375 25.9236 19.7601 24.5556 21.4688 24.5556C21.722 24.5556 21.9659 24.5853 22.1981 24.6406C22.2365 24.6497 22.2747 24.6596 22.3125 24.6701V21.2763C22.0358 21.2406 21.7541 21.2222 21.4688 21.2222C17.8962 21.2222 15 24.0826 15 27.6111C15 31.1396 17.8962 34 21.4688 34C25.0413 34 27.9375 31.1396 27.9375 27.6111V20.6673C29.3477 21.7134 31.1005 22.3333 33 22.3333V19Z" fill="#FEF5CD"></path>
                                </svg>
                            </span>
                            <span data-e2e="wallet-package-coin-num-0" class="tiktok-10lqs59-SpanNumDisplay e4yj8b63" data-span-id="coins">700</span>
                        </div>
                        <div class="tiktok-1uetk1w-DivTextContainer e4yj8b64">
                            <span data-e2e="wallet-package-price-0" class="tiktok-hpayk8-SpanTextNow e4yj8b66">€ <span data-span-id="price" >8.29</span> </span>
                        </div>
                    </button>
                </li>
                <li>
                    <button  type="button" aria-label="70 Pièces" aria-selected="true" class="tiktok-l4v9n8-ButtonContainer e4yj8b60">
                        <div class="tiktok-16jd2dh-DivNumContainer e4yj8b61">
                            <span data-e2e="wallet-package-coin-icon-0" class="tiktok-240y52-SpanNumIcon e4yj8b62">
                                <svg class="tiktok-kkwvro-StyledCoinIcon e4yj8b611" width="1em" data-e2e="" height="1em" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="22" fill="#FFEC9B"></circle>
                                    <circle cx="24" cy="24" r="17" fill="#FACE15"></circle>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.9347 25.5C40.9779 25.0058 41 24.5055 41 24C41 14.6112 33.3888 7 24 7C14.6112 7 7 14.6112 7 24C7 24.5055 7.02206 25.0058 7.06527 25.5C7.82466 16.8137 15.1166 10 24 10C32.8834 10 40.1753 16.8137 40.9347 25.5Z" fill="#FABC15"></path>
                                    <path d="M33 19C30.2041 19 27.9375 16.7614 27.9375 14H24.5625V27.6111C24.5625 29.2986 23.1774 30.6667 21.4688 30.6667C19.7601 30.6667 18.375 29.2986 18.375 27.6111C18.375 25.9236 19.7601 24.5556 21.4688 24.5556C21.722 24.5556 21.9659 24.5853 22.1981 24.6406C22.2365 24.6497 22.2747 24.6596 22.3125 24.6701V21.2763C22.0358 21.2406 21.7541 21.2222 21.4688 21.2222C17.8962 21.2222 15 24.0826 15 27.6111C15 31.1396 17.8962 34 21.4688 34C25.0413 34 27.9375 31.1396 27.9375 27.6111V20.6673C29.3477 21.7134 31.1005 22.3333 33 22.3333V19Z" fill="#FEF5CD"></path>
                                </svg>
                            </span>
                            <span data-e2e="wallet-package-coin-num-0" class="tiktok-10lqs59-SpanNumDisplay e4yj8b63" data-span-id="coins">1,400</span>
                        </div>
                        <div class="tiktok-1uetk1w-DivTextContainer e4yj8b64">
                            <span data-e2e="wallet-package-price-0"  class="tiktok-hpayk8-SpanTextNow e4yj8b66">€ <span data-span-id="price">16.49</span></span>
                        </div>
                    </button>
                </li>
                <li>
                    <button  type="button" aria-label="70 Pièces" aria-selected="true" class="tiktok-l4v9n8-ButtonContainer e4yj8b60">
                        <div class="tiktok-16jd2dh-DivNumContainer e4yj8b61">
                            <span data-e2e="wallet-package-coin-icon-0" class="tiktok-240y52-SpanNumIcon e4yj8b62">
                                <svg class="tiktok-kkwvro-StyledCoinIcon e4yj8b611" width="1em" data-e2e="" height="1em" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="22" fill="#FFEC9B"></circle>
                                    <circle cx="24" cy="24" r="17" fill="#FACE15"></circle>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.9347 25.5C40.9779 25.0058 41 24.5055 41 24C41 14.6112 33.3888 7 24 7C14.6112 7 7 14.6112 7 24C7 24.5055 7.02206 25.0058 7.06527 25.5C7.82466 16.8137 15.1166 10 24 10C32.8834 10 40.1753 16.8137 40.9347 25.5Z" fill="#FABC15"></path>
                                    <path d="M33 19C30.2041 19 27.9375 16.7614 27.9375 14H24.5625V27.6111C24.5625 29.2986 23.1774 30.6667 21.4688 30.6667C19.7601 30.6667 18.375 29.2986 18.375 27.6111C18.375 25.9236 19.7601 24.5556 21.4688 24.5556C21.722 24.5556 21.9659 24.5853 22.1981 24.6406C22.2365 24.6497 22.2747 24.6596 22.3125 24.6701V21.2763C22.0358 21.2406 21.7541 21.2222 21.4688 21.2222C17.8962 21.2222 15 24.0826 15 27.6111C15 31.1396 17.8962 34 21.4688 34C25.0413 34 27.9375 31.1396 27.9375 27.6111V20.6673C29.3477 21.7134 31.1005 22.3333 33 22.3333V19Z" fill="#FEF5CD"></path>
                                </svg>
                            </span>
                            <span data-e2e="wallet-package-coin-num-0" class="tiktok-10lqs59-SpanNumDisplay e4yj8b63" data-span-id="coins">3,500</span>
                        </div>
                        <div class="tiktok-1uetk1w-DivTextContainer e4yj8b64">
                            <span data-e2e="wallet-package-price-0"  class="tiktok-hpayk8-SpanTextNow e4yj8b66">€ <span data-span-id="price" >41.25</span></span>
                        </div>
                    </button>
                </li>
                <li>
                    <button  type="button" aria-label="70 Pièces" aria-selected="true" class="tiktok-l4v9n8-ButtonContainer e4yj8b60">
                        <div class="tiktok-16jd2dh-DivNumContainer e4yj8b61">
                            <span data-e2e="wallet-package-coin-icon-0" class="tiktok-240y52-SpanNumIcon e4yj8b62">
                                <svg class="tiktok-kkwvro-StyledCoinIcon e4yj8b611" width="1em" data-e2e="" height="1em" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="22" fill="#FFEC9B"></circle>
                                    <circle cx="24" cy="24" r="17" fill="#FACE15"></circle>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.9347 25.5C40.9779 25.0058 41 24.5055 41 24C41 14.6112 33.3888 7 24 7C14.6112 7 7 14.6112 7 24C7 24.5055 7.02206 25.0058 7.06527 25.5C7.82466 16.8137 15.1166 10 24 10C32.8834 10 40.1753 16.8137 40.9347 25.5Z" fill="#FABC15"></path>
                                    <path d="M33 19C30.2041 19 27.9375 16.7614 27.9375 14H24.5625V27.6111C24.5625 29.2986 23.1774 30.6667 21.4688 30.6667C19.7601 30.6667 18.375 29.2986 18.375 27.6111C18.375 25.9236 19.7601 24.5556 21.4688 24.5556C21.722 24.5556 21.9659 24.5853 22.1981 24.6406C22.2365 24.6497 22.2747 24.6596 22.3125 24.6701V21.2763C22.0358 21.2406 21.7541 21.2222 21.4688 21.2222C17.8962 21.2222 15 24.0826 15 27.6111C15 31.1396 17.8962 34 21.4688 34C25.0413 34 27.9375 31.1396 27.9375 27.6111V20.6673C29.3477 21.7134 31.1005 22.3333 33 22.3333V19Z" fill="#FEF5CD"></path>
                                </svg>
                            </span>
                            <span data-e2e="wallet-package-coin-num-0" class="tiktok-10lqs59-SpanNumDisplay e4yj8b63" data-span-id="coins">7000</span>
                        </div>
                        <div class="tiktok-1uetk1w-DivTextContainer e4yj8b64">
                            <span data-e2e="wallet-package-price-0"  class="tiktok-hpayk8-SpanTextNow e4yj8b66">€ <span data-span-id="price"> 82.09 </span></span>
                        </div>
                    </button>
                </li>
                <li>
                    <button  type="button" aria-label="70 Pièces" aria-selected="true" class="tiktok-l4v9n8-ButtonContainer e4yj8b60">
                        <div class="tiktok-16jd2dh-DivNumContainer e4yj8b61">
                            <span data-e2e="wallet-package-coin-icon-0" class="tiktok-240y52-SpanNumIcon e4yj8b62">
                                <svg class="tiktok-kkwvro-StyledCoinIcon e4yj8b611" width="1em" data-e2e="" height="1em" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="22" fill="#FFEC9B"></circle>
                                    <circle cx="24" cy="24" r="17" fill="#FACE15"></circle>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.9347 25.5C40.9779 25.0058 41 24.5055 41 24C41 14.6112 33.3888 7 24 7C14.6112 7 7 14.6112 7 24C7 24.5055 7.02206 25.0058 7.06527 25.5C7.82466 16.8137 15.1166 10 24 10C32.8834 10 40.1753 16.8137 40.9347 25.5Z" fill="#FABC15"></path>
                                    <path d="M33 19C30.2041 19 27.9375 16.7614 27.9375 14H24.5625V27.6111C24.5625 29.2986 23.1774 30.6667 21.4688 30.6667C19.7601 30.6667 18.375 29.2986 18.375 27.6111C18.375 25.9236 19.7601 24.5556 21.4688 24.5556C21.722 24.5556 21.9659 24.5853 22.1981 24.6406C22.2365 24.6497 22.2747 24.6596 22.3125 24.6701V21.2763C22.0358 21.2406 21.7541 21.2222 21.4688 21.2222C17.8962 21.2222 15 24.0826 15 27.6111C15 31.1396 17.8962 34 21.4688 34C25.0413 34 27.9375 31.1396 27.9375 27.6111V20.6673C29.3477 21.7134 31.1005 22.3333 33 22.3333V19Z" fill="#FEF5CD"></path>
                                </svg>
                            </span>
                            <span data-e2e="wallet-package-coin-num-0" class="tiktok-10lqs59-SpanNumDisplay e4yj8b63" data-span-id="coins">17,500</span>
                        </div>
                        <div class="tiktok-1uetk1w-DivTextContainer e4yj8b64">
                            <span data-e2e="wallet-package-price-0"  class="tiktok-hpayk8-SpanTextNow e4yj8b66">€ <span data-span-id="price">205.19</span></span>
                        </div>
                    </button>
                </li>
                <li>
                    <button  type="button" data-button-id="custom" aria-label="70 Pièces" aria-selected="true" class="tiktok-l4v9n8-ButtonContainer e4yj8b60">
                        <div class="tiktok-16jd2dh-DivNumContainer e4yj8b61">
                            <span data-e2e="wallet-package-coin-icon-0" class="tiktok-240y52-SpanNumIcon e4yj8b62">
                                <svg class="tiktok-kkwvro-StyledCoinIcon e4yj8b611" width="1em" data-e2e="" height="1em" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="22" fill="#FFEC9B"></circle>
                                    <circle cx="24" cy="24" r="17" fill="#FACE15"></circle>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.9347 25.5C40.9779 25.0058 41 24.5055 41 24C41 14.6112 33.3888 7 24 7C14.6112 7 7 14.6112 7 24C7 24.5055 7.02206 25.0058 7.06527 25.5C7.82466 16.8137 15.1166 10 24 10C32.8834 10 40.1753 16.8137 40.9347 25.5Z" fill="#FABC15"></path>
                                    <path d="M33 19C30.2041 19 27.9375 16.7614 27.9375 14H24.5625V27.6111C24.5625 29.2986 23.1774 30.6667 21.4688 30.6667C19.7601 30.6667 18.375 29.2986 18.375 27.6111C18.375 25.9236 19.7601 24.5556 21.4688 24.5556C21.722 24.5556 21.9659 24.5853 22.1981 24.6406C22.2365 24.6497 22.2747 24.6596 22.3125 24.6701V21.2763C22.0358 21.2406 21.7541 21.2222 21.4688 21.2222C17.8962 21.2222 15 24.0826 15 27.6111C15 31.1396 17.8962 34 21.4688 34C25.0413 34 27.9375 31.1396 27.9375 27.6111V20.6673C29.3477 21.7134 31.1005 22.3333 33 22.3333V19Z" fill="#FEF5CD"></path>
                                </svg>
                            </span>
                            <span id="txtInput" data-e2e="wallet-package-coin-num-0" class="tiktok-10lqs59-SpanNumDisplay e4yj8b63" >Custom</span>
                            <input onKeyPress="if(this.value.length==9) return false;" style="display: none;"  type="text" class="tiktok-1tgzr1h-InputNum e4yj8b67"  id="input" name="inputNum">
                        </div>
                        <div class="tiktok-1uetk1w-DivTextContainer e4yj8b64" id="spanTxtDiv">
                            <span id="spanTxt" data-e2e="wallet-package-price-0" class="tiktok-hpayk8-SpanTextNow e4yj8b66" >Large amount supported</span>
                        </div>
                    </button>
                </li>
            </ol>
        </div>
        <div class="tiktok-11ddo6h-DivTotalContainer e1sbo8o80">
            <ul class="tiktok-fbshyx-UlPaymentMethodsContainer e1sbo8o81">
                <li>
                    <span data-e2e="wallet-title-payment-method" class="tiktok-1sjzc7n-SpanTotalText e1sbo8o82">Payment method</span>
                </li>
                <li>
                    <img src="https://lf16-co.g-p-static.com/obj/pipo-sgcompliance/sky/mastercard-gray-update_7b3ceb.svg" data-e2e="wallet-payment-icon-MASTER" alt="Mastercard" class="tiktok-1quc8c-ImgPaymentIcon e1sbo8o85">
                </li>
                <li>
                    <img src="https://lf16-co.g-p-static.com/obj/pipo-sgcompliance/sky/visa_light_c558fb.svg" data-e2e="wallet-payment-icon-VISA" alt="Visa" class="tiktok-1quc8c-ImgPaymentIcon e1sbo8o85">
                </li>
                <li>
                    <img src="https://lf16-co.g-p-static.com/obj/pipo-sg/sky/maestro_188b29.svg" data-e2e="wallet-payment-icon-MAESTRO" alt="Maestro" class="tiktok-1quc8c-ImgPaymentIcon e1sbo8o85">
                </li>
                <li>
                    <img src="https://lf16-co.g-p-static.com/obj/pipo-sg/sky/card_american_express_v1_429e0f.svg" data-e2e="wallet-payment-icon-AMEX" alt="American Express" class="tiktok-1quc8c-ImgPaymentIcon e1sbo8o85">
                </li>
                <li>
                    <img src="https://lf16-co.g-p-static.com/obj/pipo-sgcompliance/sky/paypal-light-border_4305a4.svg" data-e2e="wallet-payment-icon-PAYPAL" alt="PAYPAL" class="tiktok-1quc8c-ImgPaymentIcon e1sbo8o85">
                </li>
            </ul>
        </div>
        <div class="total d-flex align-item-center mt-4" >
            <span class="spantotaltxt">Total</span>
            <span class="SpanTotalMount" >€ <span id="totalMount"><?php 
                        if (isset($_GET["price"])) {
                            echo $_GET["price"];
                        }else{
                            echo "0";
                        }
                    
                    ?></span></span>
            <input type="hidden" name="PriceSpanValue" id="hiddenInput">
            <input type="hidden" name="coinsValue" id="coinsValue">
        </div>
        <div class="tiktok-vr1v8s-DivButtonContainer ep2pazl8">
            <button disabled id="buynow" type="submit" data-e2e="wallet-button-buynow" aria-label="Recharger" aria-live="polite" class="ep2pazl10 tiktok-174cudu-Button-StyledBuyButton ehk74z00">Recharge</button>
        </div>
        </form>
    </div>
</div>