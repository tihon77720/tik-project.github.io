<div class="tiktok-l6q0uj-DivMainContainer e104ayg82">
    <div class="tiktok-6d315m-DivContentContainer e104ayg83">
        <div class="tiktok-rq0xn0-DivContentWrapper e104ayg80">
            <div class="tiktok-jkllyd-DivContentWrapper e1b01qlz0">
                <a href="./?action=defaut">
                    <div role="img" alt="back" class="tiktok-1ueimcy-DivIconContain e1b01qlz1">
                        <svg class="tiktok-1k97lrf-StyledTitleIcon e1b01qlz2" width="1em" data-e2e="" height="1em" viewBox="0 0 12 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.62128 9.85348L11.2071 17.4393C11.4023 17.6345 11.4023 17.9511 11.2071 18.1464L9.79286 19.5606C9.59759 19.7558 9.28101 19.7558 9.08575 19.5606L0.439301 10.9141C-0.146484 10.3284 -0.146484 9.3786 0.439301 8.79282L9.08575 0.146372C9.28101 -0.0488911 9.59759 -0.0488911 9.79286 0.146372L11.2071 1.56058C11.4023 1.75585 11.4023 2.07243 11.2071 2.26769L3.62128 9.85348Z"></path>
                        </svg>
                    </div>
                </a>
                <span class="tiktok-4gci5n-SpanTitle e1b01qlz3">Transaction history</span>
            </div>
            <div class="tiktok-1wovrh0-DivContentWrapper el3me8n0">
                <span class="tiktok-7go9t6-SpanDesText el3me8n1">This page only shows the transaction history of your Coins purchased through TikTok.com. </span>
                <span class="tiktok-1t9ch3d-SpanTermText el3me8n2">
                    <a href="https://www.tiktok.com/coin/legal/terms-of-purchase-for-coins" style="color: rgb(22, 24, 35);">View Terms of Purchase for Coins</a>
                </span>
            </div>
            <div class="tiktok-1bm781j-DivChartContentWrapper e104ayg81 px-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Amount</th>
                            <th scope="col">Payment method</th>
                            <th scope="col">Payment</th>
                            <th scope="col">User</th>
                            <th scope="col">Date</th>
                            <th scope="col">Order ID</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php for ($i=0; $i < count($transactions) ; $i++) { ?>
                        <tr>
                            <th scope="row"><span data-e2e="wallet-package-coin-icon-0" class="tiktok-240y52-SpanNumIcon e4yj8b62">
                                <svg class=" e4yj8b611" width="1em" data-e2e="" height="1em" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="22" fill="#FFEC9B"></circle>
                                    <circle cx="24" cy="24" r="17" fill="#FACE15"></circle>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.9347 25.5C40.9779 25.0058 41 24.5055 41 24C41 14.6112 33.3888 7 24 7C14.6112 7 7 14.6112 7 24C7 24.5055 7.02206 25.0058 7.06527 25.5C7.82466 16.8137 15.1166 10 24 10C32.8834 10 40.1753 16.8137 40.9347 25.5Z" fill="#FABC15"></path>
                                    <path d="M33 19C30.2041 19 27.9375 16.7614 27.9375 14H24.5625V27.6111C24.5625 29.2986 23.1774 30.6667 21.4688 30.6667C19.7601 30.6667 18.375 29.2986 18.375 27.6111C18.375 25.9236 19.7601 24.5556 21.4688 24.5556C21.722 24.5556 21.9659 24.5853 22.1981 24.6406C22.2365 24.6497 22.2747 24.6596 22.3125 24.6701V21.2763C22.0358 21.2406 21.7541 21.2222 21.4688 21.2222C17.8962 21.2222 15 24.0826 15 27.6111C15 31.1396 17.8962 34 21.4688 34C25.0413 34 27.9375 31.1396 27.9375 27.6111V20.6673C29.3477 21.7134 31.1005 22.3333 33 22.3333V19Z" fill="#FEF5CD"></path>
                                </svg>
                            </span> <?= $transactions[$i]["coins"] ?> </th>
                            <td class="d-flex">
                            <?php if ($transactions[$i]["paiementMethod"] === "PayPal") { ?>
                                <div class="pc-payment-item-right flex-grow mx-2" style="overflow: inherit;">
                                    <img alt="payment-method-icon" class="pc-payment-item-right-img ml-6" src="https://lf16-co.g-p-static.com/obj/pipo-sgcompliance/sky/paypal-light-bg_6724b7.svg">
                                </div> 
                                
                                <?php } else { ?>
                                <div class="pc-payment-item-right flex-grow mx-2" style="overflow: inherit;">
                                    <img alt="payment-method-icon" class="pc-payment-item-right-img ml-6" src="https://lf16-co.g-p-static.com/obj/pipo-sgcompliance/sky/visa_light_c558fb.svg">
                                </div> 
                                <?php } ?>
                                <?= $transactions[$i]["paiementMethod"] ?>
                            </td>
                            <td>€ <?= $transactions[$i]["price"] ?></td>
                            <td><a href="https://tiktok.com/@<?= $transactions[$i]["user"] ?>">@<?= $transactions[$i]["user"] ?></a></td>
                            <td><?= substr($transactions[$i]["date"], 0 , 10)  ?></td>
                            <td><?php $ID = $transactions[$i]["id"]; echo $ID + 10000017255381 ?></td>
                            <td>

                            <?php  
                            
                                switch ($transactions[$i]["status"]) {
                                    case 'Pending':
                                        echo '<span class="badge badge-primary rounded-pill d-inline">'.$transactions[$i]["status"].'</span>';
                                        break;
                                    case 'Completed':
                                        echo '<span class="badge badge-success rounded-pill d-inline">'.$transactions[$i]["status"].'</span>';
                                        break;
                                }  
                            ?>
                                
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>