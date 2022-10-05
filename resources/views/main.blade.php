@extends('mainpartials.webstructure')
@section('main')

<main class="mainApp">
    @include('mainpartials.nav')
    <div class="section Header">
        @include('mainpartials.backgroundeffect')
        <div class="leftSide">
            <span class="headerFonts">Discover, find,</span>
            <span class="headerFonts">Sell extraordinary</span>
            <span class="headerFonts">Monster NFTs</span>
            <span>Marketplace for monster character collections non fungible token NFTs</span>
            <div class="headerBtn">
                <a href="{{route('main.index')}}" class="btn btnSecondary">
                    <svg class="icon" width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.5018 14.208L12.7719 12.0081C15.6056 7.09999 15.241 2.93672 14.9644 1.41039C14.9351 1.24485 14.8342 1.10183 14.6899 1.01705C14.5447 0.932506 14.3707 0.916005 14.2117 0.971336C12.7383 1.48437 8.90813 3.22727 6.07185 8.13984L4.80142 10.3403L4.23711 10.3794C3.14896 10.4556 2.16906 11.0678 1.6233 12.0131L0.107343 14.6388C0.0175629 14.7943 0.0203742 14.9876 0.114687 15.1409C0.209878 15.294 0.381355 15.3818 0.560862 15.3695L2.38816 15.2526C2.90103 15.2202 3.41204 15.3391 3.85737 15.5962L4.82773 16.1565L4.09308 17.4289C3.95793 17.663 4.03802 17.9619 4.27155 18.0968L5.04851 18.5454C5.28205 18.6802 5.58096 18.6001 5.71611 18.366L6.45076 17.0935L7.42057 17.6535C7.8659 17.9106 8.22557 18.2929 8.45358 18.7552L9.26515 20.395C9.34425 20.5566 9.50608 20.6612 9.68622 20.6671C9.86613 20.6721 10.035 20.5779 10.1248 20.4223L11.6407 17.7966C12.1858 16.8525 12.2255 15.6974 11.7486 14.7162L11.5018 14.208ZM10.142 8.82732C9.33605 8.36201 9.05917 7.33044 9.52448 6.5245C9.99011 5.718 11.0216 5.44256 11.8275 5.90787C12.6329 6.37286 12.9101 7.40387 12.4445 8.21037C11.9792 9.01631 10.9474 9.29231 10.142 8.82732Z" fill="white"/>
                    </svg>
                    Explore</a>
                <a href="{{route('nfts.create')}}" class="btn btnPrimary"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_84_187)">
                            <path d="M0.00889133 14.3331C-0.0180618 14.4861 0.016821 14.6436 0.105962 14.7709C0.195063 14.8982 0.331157 14.9849 0.484204 15.0118L3.08487 15.4704L1.44663 6.17929L0.00889133 14.3331Z" fill="#5142FC"/>
                            <path d="M3.13295 0.00947145C2.97955 -0.0183801 2.82127 0.0159949 2.69326 0.105057C2.56529 0.194159 2.47807 0.330604 2.451 0.484198L1.82959 4.00842L13.6528 1.92365L3.13295 0.00947145Z" fill="#5142FC"/>
                            <path d="M19.9912 16.8704L17.5493 3.02157C17.4931 2.7029 17.1893 2.49024 16.8705 2.5463L3.02166 4.98821C2.70299 5.04438 2.49017 5.34829 2.54635 5.66696L4.98826 19.5158C5.01525 19.6689 5.10193 19.8049 5.22923 19.8941C5.32841 19.9635 5.44587 20 5.56533 20C5.59919 20 5.63326 19.9971 5.66704 19.9911L19.5159 17.5492C19.6689 17.5223 19.805 17.4356 19.8941 17.3083C19.9833 17.181 20.0182 17.0235 19.9912 16.8704ZM5.66845 9.8763C5.61228 9.55763 5.82509 9.25372 6.14376 9.19755L15.3764 7.56958C15.6953 7.51341 15.999 7.72618 16.0552 8.04485C16.1113 8.36352 15.8985 8.66743 15.5798 8.7236L6.34724 10.3516C6.31282 10.3577 6.27857 10.3606 6.24482 10.3606C5.96579 10.3606 5.71857 10.1606 5.66845 9.8763ZM13.3163 13.8826L7.16122 14.9679C7.12681 14.974 7.09255 14.9769 7.0588 14.9769C6.77978 14.9769 6.53255 14.7769 6.48243 14.4926C6.42626 14.1739 6.63907 13.87 6.95775 13.8138L13.1128 12.7285C13.4317 12.6723 13.7354 12.8851 13.7916 13.2038C13.8477 13.5225 13.6349 13.8264 13.3163 13.8826ZM15.9868 11.0318L6.75419 12.6597C6.71978 12.6658 6.68552 12.6687 6.65177 12.6687C6.37275 12.6687 6.12552 12.4687 6.0754 12.1844C6.01923 11.8658 6.23204 11.5618 6.55071 11.5057L15.7833 9.8777C16.1022 9.82153 16.4059 10.0343 16.4621 10.353C16.5183 10.6717 16.3055 10.9756 15.9868 11.0318Z" fill="#5142FC"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_84_187">
                                <rect width="20" height="20" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    Create</a>
            </div>
        </div>
        <div class="righSide"> <svg width="620" height="449" viewBox="0 0 620 449" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M228.87 444.519C225.199 443.268 221.639 441.708 218.228 439.854C186.918 422.839 176.801 388.235 166.085 351.601C158.552 325.858 150.766 299.233 134.951 279.161C119.766 259.887 97.8477 247.655 76.6555 235.799C65.1078 229.357 53.1693 222.693 42.3305 214.933C9.60492 191.501 -12.4289 146.586 9.03551 114.897C25.5165 90.5673 58.6007 87.4796 76.8515 87.8035C84.1347 87.9322 91.55 88.463 98.7259 88.9774C115.948 90.2104 133.756 91.4882 150.699 87.2182C174.908 81.1058 194.999 64.386 214.421 48.218C225.465 38.9793 236.897 29.5069 249.081 21.89C285.392 -0.807499 333.222 -5.46884 377.039 9.42313C413.841 21.931 443.399 46.3091 460.277 78.0702C467.633 91.9384 473.086 107.312 478.358 122.193C488.36 150.416 497.803 177.076 519.261 195.266C530.654 204.928 544.64 211.127 558.156 217.125C564.769 220.063 571.611 223.095 578.108 226.513C592.667 234.165 617.338 251.019 619.069 277.925C621.188 310.923 585.171 336.383 550.194 339.461C535.855 340.719 521.255 339.678 507.138 338.632C488.759 337.314 469.746 335.952 451.431 339.747C417.58 346.789 389.706 370.34 362.741 393.12C355.655 399.108 348.334 405.276 341.021 411.073C321.97 426.173 272.985 459.512 228.87 444.519ZM376.231 11.6822C333.059 -2.99059 285.947 1.58182 250.218 23.9167C238.172 31.4508 226.807 40.9134 215.819 50.0574C196.198 66.3932 175.912 83.2904 151.173 89.5229C133.885 93.8785 115.896 92.5963 98.4889 91.3491C91.3439 90.8371 83.9594 90.3087 76.7519 90.1896C58.9637 89.8767 26.7663 92.8435 10.908 116.248C-9.73303 146.747 11.846 190.232 43.6243 213.01C54.3547 220.717 66.2464 227.333 77.7424 233.741C99.1351 245.681 121.26 258.024 136.728 277.653C152.822 298.089 160.677 324.932 168.268 350.898C178.846 387.054 188.827 421.222 219.309 437.769C222.615 439.567 226.067 441.08 229.628 442.291C272.686 456.926 320.867 424.093 339.586 409.294C346.859 403.548 354.177 397.363 361.251 391.387C388.437 368.422 416.547 344.667 450.973 337.513C469.574 333.644 488.741 335.018 507.281 336.35C521.318 337.353 535.831 338.396 549.991 337.151C583.859 334.175 618.753 309.762 616.719 278.166C615.004 251.444 588.354 234.648 576.982 228.664C570.551 225.284 563.745 222.265 557.164 219.346C543.497 213.28 529.37 207.009 517.723 197.139C495.787 178.543 485.798 150.349 476.139 123.071C470.887 108.294 465.473 92.9665 458.196 79.263C441.604 47.9886 412.485 24.012 376.229 11.6895L376.231 11.6822Z" fill="#6A1AB7"/>
            </svg>
        </div>
    </div>
    <div class="section liveAuctions">
        <div class="liveAuctionsMain">
            <span class="liveHeader">Live Auctions</span>
            <span class="liveOp">EXPLORE MORE</span>
        </div>

        <div class="carruselItems">
            @each('mainpartials.nftcontainer',$nfts,'nft')


        </div>
        <div class="carruselNav">
            <button class="leftBtn"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.6667 7H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.83333 12.8337L1 7.00033L6.83333 1.16699" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <div><svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4" cy="4" r="4" fill="white"/>
                </svg>
            </div>
            <div><svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4" cy="4" r="4" fill="white"/>
                </svg>
            </div>
            <div><svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4" cy="4" r="4" fill="white"/>
                </svg>
            </div>
            <div><svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4" cy="4" r="4" fill="white"/>
                </svg>
            </div>
            <button class="rightBtn"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 7H12.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.83301 1.16699L12.6663 7.00033L6.83301 12.8337" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </div>
    <div class="section topSeller">
        <div class="topSellerHeader">
            <div class="liveHeader">Top Seller</div>
            <div class="topSellerHbtn">
                <div class="topSellerBtn"><svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.444197 9.2196L9.34445 0.31951C9.5503 0.113495 9.8251 0 10.1181 0C10.4111 0 10.6859 0.113495 10.8918 0.31951L11.5472 0.974789C11.9737 1.40178 11.9737 2.09576 11.5472 2.52209L4.07344 9.99585L11.5555 17.4779C11.7613 17.6839 11.875 17.9586 11.875 18.2514C11.875 18.5446 11.7613 18.8192 11.5555 19.0254L10.9 19.6805C10.694 19.8865 10.4194 20 10.1264 20C9.83339 20 9.5586 19.8865 9.35274 19.6805L0.444197 10.7723C0.237857 10.5656 0.124525 10.2897 0.125175 9.99634C0.124525 9.70187 0.237857 9.4261 0.444197 9.2196Z" fill="white"/>
                    </svg>
                </div>
                <div class="topSellerBtn sellerbg"><svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.5558 9.2196L2.65555 0.31951C2.4497 0.113495 2.1749 0 1.8819 0C1.58889 0 1.3141 0.113495 1.10824 0.31951L0.452802 0.974789C0.0263017 1.40178 0.0263017 2.09576 0.452802 2.52209L7.92656 9.99585L0.44451 17.4779C0.238658 17.6839 0.125 17.9586 0.125 18.2514C0.125 18.5446 0.238658 18.8192 0.44451 19.0254L1.09995 19.6805C1.30597 19.8865 1.5806 20 1.8736 20C2.16661 20 2.4414 19.8865 2.64726 19.6805L11.5558 10.7723C11.7621 10.5656 11.8755 10.2897 11.8748 9.99634C11.8755 9.70187 11.7621 9.4261 11.5558 9.2196Z" fill="#5142FC"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="carruselItems">
            @each('mainpartials.topsellers',$nfts,'nft')

        </div>




    </div>
    <div class="section todayPicks">
        <div class="liveAuctionsMain">
            <span class="liveHeader">Today picks</span>
            <span class="liveOp">EXPLORE MORE</span>
        </div>
        <div class="todayPicksGrid">
            <div class="todayTemplate">
                <div class="auctionImage">
                    <img src="" alt="">
                    <div class="likeBtn"><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.7145 1.64644C12.9744 -0.0932156 10.1436 -0.0932156 8.40393 1.64644L7.99986 2.05027L7.59603 1.64644C5.85637 -0.0934511 3.02531 -0.0934511 1.28565 1.64644C-0.418689 3.35078 -0.429756 6.05233 1.25998 7.93068C2.80114 9.64326 7.34643 13.3432 7.53928 13.4998C7.6702 13.6062 7.82773 13.658 7.98432 13.658C7.9895 13.658 7.99468 13.658 7.99963 13.6578C8.16163 13.6653 8.32481 13.6098 8.45997 13.4998C8.65282 13.3432 13.1986 9.64326 14.7402 7.93045C16.4297 6.05233 16.4186 3.35078 14.7145 1.64644ZM13.69 6.98551C12.4884 8.32039 9.18546 11.0735 7.99963 12.0505C6.8138 11.0737 3.51155 8.32086 2.31018 6.98574C1.13142 5.67558 1.12035 3.80971 2.28452 2.64554C2.87908 2.05122 3.6599 1.75382 4.44072 1.75382C5.22154 1.75382 6.00236 2.05098 6.59693 2.64554L7.48512 3.53374C7.59085 3.63947 7.72412 3.70257 7.86399 3.72471C8.09099 3.77345 8.33729 3.71011 8.51389 3.53398L9.40256 2.64554C10.5919 1.45665 12.5266 1.45689 13.7152 2.64554C14.8794 3.80971 14.8683 5.67558 13.69 6.98551Z" fill="white"/>
                        </svg>
                        <span>100</span></div>

                </div>
                <div class="auctionHeader">
                    <span class="imgName">"Living Vase 01 by Lanza...</span>
                    <div class="btnBsc">BSC</div>
                </div>
                <div class="auctionDescription">
                    <span class="creatorText">Creator</span>
                    <span class="autorName">Freddie Carpenter</span>
                    <span class="price">4.89 eTH</span>
                    <span class="bidText">Current Bid</span>
                    <span class="AutorPhoto"></span>
                </div>
                <div class="btnBid">
                    <div class="btnToday borderbtn"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8759 5.39163H14.0555C16.4169 5.39163 18.3334 7.26663 18.3334 9.56663V14.1666C18.3334 16.4666 16.4169 18.3333 14.0555 18.3333H5.94464C3.58324 18.3333 1.66675 16.4666 1.66675 14.1666V9.56663C1.66675 7.26663 3.58324 5.39163 5.94464 5.39163H6.12431C6.14142 4.39163 6.54355 3.45829 7.27079 2.75829C8.00659 2.04996 8.94772 1.69163 10.0086 1.66663C12.1305 1.66663 13.8502 3.33329 13.8759 5.39163ZM8.16916 3.64996C7.69003 4.11663 7.4248 4.73329 7.40769 5.39163H12.5925C12.5668 4.02496 11.4204 2.91663 10.0087 2.91663C9.34985 2.91663 8.66539 3.17496 8.16916 3.64996ZM13.2513 8.59996C13.6106 8.59996 13.8929 8.31662 13.8929 7.97496V7.00829C13.8929 6.66663 13.6106 6.38329 13.2513 6.38329C12.9005 6.38329 12.6096 6.66663 12.6096 7.00829V7.97496C12.6096 8.31662 12.9005 8.59996 13.2513 8.59996ZM7.31354 7.97496C7.31354 8.31663 7.0312 8.59996 6.67186 8.59996C6.32107 8.59996 6.03018 8.31663 6.03018 7.97496V7.00829C6.03018 6.66663 6.32107 6.38329 6.67186 6.38329C7.0312 6.38329 7.31354 6.66663 7.31354 7.00829V7.97496Z" fill="white"/>
                        </svg>
                        Place Bid</div>
                    <div class="btnToday"><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.7805 9.99296C16.5496 9.88928 16.2869 9.88159 16.0503 9.97158C15.8137 10.0616 15.6225 10.2419 15.5188 10.4728C15.0506 11.5168 14.2958 12.4066 13.3421 13.0388C12.3884 13.671 11.275 14.0197 10.131 14.0443C8.98711 14.069 7.85965 13.7687 6.87959 13.1782C5.89954 12.5877 5.10709 11.7313 4.5943 10.7085L5.13492 10.9492C5.3662 11.0521 5.62892 11.059 5.86527 10.9683C6.10163 10.8776 6.29226 10.6967 6.39523 10.4654C6.49821 10.2341 6.50509 9.97139 6.41436 9.73503C6.32363 9.49868 6.14273 9.30805 5.91144 9.20507L3.39914 8.08656C3.28462 8.03557 3.16118 8.00764 3.03586 8.00436C2.91055 8.00107 2.78582 8.02251 2.66879 8.06743C2.55175 8.11236 2.44472 8.17989 2.35379 8.26618C2.26286 8.35247 2.18981 8.45583 2.13883 8.57035L1.02027 11.0826C0.917298 11.3139 0.910419 11.5766 1.00115 11.8129C1.09188 12.0493 1.27278 12.2399 1.50406 12.3429C1.73534 12.4459 1.99806 12.4527 2.23441 12.362C2.47077 12.2713 2.6614 12.0904 2.76437 11.8591L2.89195 11.5726C3.5543 12.8899 4.56971 13.9973 5.82485 14.7712C7.07999 15.545 8.52548 15.9548 10 15.9549C10.0461 15.9549 10.0925 15.9545 10.1387 15.9537C11.6495 15.9276 13.1215 15.4718 14.3827 14.6397C15.6439 13.8075 16.6421 12.6335 17.2604 11.2548C17.3641 11.0238 17.3718 10.7611 17.2818 10.5245C17.1918 10.2879 17.0115 10.0967 16.7805 9.99296Z" fill="white"/>
                            <path d="M18.496 3.65712C18.2647 3.55416 18.002 3.54728 17.7656 3.63801C17.5293 3.72874 17.3387 3.90963 17.2357 4.14091L17.1081 4.42743C16.435 3.08855 15.3975 1.96698 14.1149 1.19185C12.8324 0.416715 11.3571 0.0195384 9.85873 0.0460449C8.3604 0.0725515 6.90001 0.521663 5.64571 1.34167C4.39141 2.16168 3.39419 3.31925 2.76885 4.68111C2.71633 4.79502 2.68678 4.91818 2.68188 5.04353C2.67698 5.16887 2.69684 5.29396 2.74032 5.41162C2.7838 5.52929 2.85004 5.63724 2.93526 5.72929C3.02049 5.82134 3.12302 5.89569 3.23699 5.94808C3.35097 6.00048 3.47415 6.0299 3.59951 6.03466C3.72486 6.03942 3.84992 6.01943 3.96754 5.97582C4.08516 5.93222 4.19303 5.86586 4.28499 5.78053C4.37695 5.69521 4.45119 5.5926 4.50346 5.47857C4.97898 4.44286 5.73746 3.5626 6.6915 2.93922C7.64554 2.31584 8.75631 1.97472 9.89579 1.95517C11.0353 1.93563 12.1571 2.23845 13.1319 2.82873C14.1068 3.41902 14.895 4.27275 15.4058 5.29154L14.8652 5.05083C14.6341 4.94943 14.3724 4.94361 14.1371 5.03465C13.9017 5.12569 13.712 5.30619 13.6094 5.53668C13.5068 5.76718 13.4996 6.02892 13.5894 6.26471C13.6792 6.5005 13.8587 6.69114 14.0887 6.79497L16.5937 7.91013L16.5982 7.91216C16.7128 7.96359 16.8364 7.99191 16.9619 7.99549C17.0875 7.99907 17.2125 7.97784 17.3298 7.93301C17.4471 7.88819 17.5544 7.82066 17.6456 7.73428C17.7368 7.64791 17.81 7.54439 17.8611 7.42966L18.9796 4.91743C19.0826 4.68617 19.0895 4.42347 18.9988 4.18712C18.9081 3.95077 18.7273 3.76012 18.496 3.65712Z" fill="white"/>
                        </svg>
                        View History</div>
                </div>
            </div>


        </div>
    </div>
    <div class="section popularCollection">
        <div class="popularMainMenu">
            <span class="popularHeaderText" >Popular Collection</span>
            <span class="pouplarHeaderOp">Explore more</span>
        </div>

        <div class="popularCollectionRow">
            @each('mainpartials.collectionspreview',$collections,'collection')

        </div>

    </div>
    <div class="Section CSNFT">
        <SPan class="CSNFTmain">Create and sell your NFTs</SPan>
        <div class="CScontainer">

            <div class="CSItems"><div><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="60" height="60" rx="16" fill="#47A432"/>
                        <path d="M25.104 18H21.048C19.368 18 18 19.38 18 21.0732V25.164C18 26.868 19.368 28.2359 21.048 28.2359H25.104C26.796 28.2359 28.1519 26.868 28.1519 25.164V21.0732C28.1519 19.38 26.796 18 25.104 18Z" fill="white"/>
                        <path d="M25.104 31.7637H21.048C19.368 31.7637 18 33.1329 18 34.8369V38.9276C18 40.6196 19.368 41.9996 21.048 41.9996H25.104C26.796 41.9996 28.1519 40.6196 28.1519 38.9276V34.8369C28.1519 33.1329 26.796 31.7637 25.104 31.7637Z" fill="white"/>
                        <path d="M38.9521 18H34.8961C33.2041 18 31.8481 19.38 31.8481 21.0732V25.164C31.8481 26.868 33.2041 28.2359 34.8961 28.2359H38.9521C40.6321 28.2359 42.0001 26.868 42.0001 25.164V21.0732C42.0001 19.38 40.6321 18 38.9521 18Z" fill="white" fill-opacity="0.4"/>
                        <path d="M38.9521 31.7637H34.8961C33.2041 31.7637 31.8481 33.1329 31.8481 34.8369V38.9276C31.8481 40.6196 33.2041 41.9996 34.8961 41.9996H38.9521C40.6321 41.9996 42.0001 40.6196 42.0001 38.9276V34.8369C42.0001 33.1329 40.6321 31.7637 38.9521 31.7637Z" fill="white"/>
                    </svg>


                </div>
                <span class="CSNFTHeader">Set up your wallet</span>
                <span class="CSNFTdescription">Wallet that is functional for NFT purchasing. You may have a Coinbase account at this point, but very few are actually set up to buy an NFT.</span>
            </div>
            <div class="CSItems">
                <div><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="60" height="60" rx="16" fill="#5142FC"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.9227 28.0178H41.104C41.5988 28.0178 42 28.3981 42 28.8671V31.8195C41.9942 32.2862 41.5964 32.6633 41.104 32.6688H37.0187C35.8257 32.684 34.7826 31.9098 34.512 30.8084C34.3765 30.1247 34.5667 29.4192 35.0317 28.8809C35.4966 28.3427 36.1888 28.0268 36.9227 28.0178ZM37.1039 31.1219H37.4986C38.0052 31.1219 38.4159 30.7326 38.4159 30.2524C38.4159 29.7722 38.0052 29.3829 37.4986 29.3829H37.1039C36.8616 29.3802 36.6282 29.4695 36.4559 29.631C36.2835 29.7924 36.1866 30.0126 36.1866 30.2423C36.1865 30.7242 36.5956 31.1164 37.1039 31.1219Z" fill="#F9F9FA" fill-opacity="0.4"/>
                        <path d="M36.9227 26.2788H42V26.2788C42 22.3154 39.5573 20 35.4187 20H24.5813C20.4427 20 18 22.3154 18 26.2282V34.7718C18 38.6846 20.4427 41 24.5813 41H35.4187C39.5573 41 42 38.6846 42 34.7718V34.4078H36.9227C34.5662 34.4078 32.656 32.5971 32.656 30.3635C32.656 28.1299 34.5662 26.3192 36.9227 26.3192V26.2788Z" fill="white"/>
                        <path d="M30.4587 26.2788H23.6854C23.177 26.2733 22.768 25.8811 22.7681 25.3992C22.7739 24.9229 23.1829 24.5398 23.6854 24.5398H30.4587C30.9654 24.5398 31.3761 24.9291 31.3761 25.4093C31.3761 25.8895 30.9654 26.2788 30.4587 26.2788V26.2788Z" fill="#948BFB"/>
                    </svg>

                </div>
                <span class="CSNFTHeader">Create your collection</span>
                <span class="CSNFTdescription">Setting up your NFT collection and creating NFTs on NFTs is easy! This guide explains how to set up your first collection</span>
            </div>
            <div class="CSItems">
                <div><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="60" height="60" rx="16" fill="#9835FB"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.396 25.8881C21.396 23.1621 23.061 21.3951 25.638 21.3951H34.354C36.94 21.3951 38.605 23.1621 38.605 25.8881V31.1901C38.159 30.8121 36.812 29.8711 36.624 29.7591C35.224 28.9191 33.544 29.2991 32.454 30.7191C32.359 30.8441 30.782 33.1441 30.224 33.4881C30.095 33.5681 29.959 33.6111 29.814 33.6311C29.464 33.6611 29.127 33.4811 28.554 33.0981C28.224 32.8881 27.864 32.6491 27.454 32.4791C25.749 31.7661 24.45 32.9441 23.758 33.7341C23.749 33.7421 21.812 36.1041 21.781 36.1411C21.538 35.5501 21.396 34.8671 21.396 34.1021V25.8881ZM40 25.888C40 22.362 37.731 20 34.354 20H25.638C22.271 20 20 22.362 20 25.888V34.102C20 35.674 20.447 37.013 21.238 38.009C21.247 38.018 21.247 38.028 21.256 38.028C22.043 39.013 23.166 39.666 24.519 39.899C24.531 39.901 24.543 39.903 24.556 39.905C24.903 39.962 25.262 40 25.638 40H34.354C34.535 40 34.7 39.966 34.874 39.953C35.078 39.936 35.289 39.932 35.483 39.898C35.74 39.854 35.976 39.777 36.215 39.703C36.319 39.67 36.43 39.65 36.53 39.612C36.773 39.52 36.996 39.401 37.217 39.279C37.297 39.235 37.383 39.199 37.461 39.15C37.678 39.014 37.875 38.855 38.068 38.689C38.132 38.634 38.201 38.584 38.262 38.526C38.45 38.347 38.616 38.15 38.775 37.944C38.824 37.879 38.876 37.819 38.923 37.752C39.076 37.534 39.208 37.299 39.33 37.054C39.364 36.983 39.4 36.914 39.433 36.842C39.546 36.585 39.64 36.316 39.72 36.034C39.741 35.958 39.762 35.883 39.78 35.805C39.851 35.514 39.902 35.214 39.935 34.9C39.939 34.862 39.95 34.827 39.954 34.789C39.961 34.704 39.96 34.619 39.965 34.534C39.973 34.388 40 34.253 40 34.102V25.888Z" fill="white"/>
                        <path d="M26.5053 28.9995C27.8668 28.9995 29.0005 27.8694 29.0005 26.5145C29.0005 25.8351 28.7156 25.2126 28.2611 24.7609C27.8086 24.2929 27.1768 23.9995 26.4792 23.9995C25.109 23.9995 24.0005 25.1035 24.0005 26.4681C24.0005 26.6486 24.0218 26.8233 24.0596 26.9931C24.2883 28.1252 25.3086 28.9995 26.5053 28.9995" fill="white" fill-opacity="0.4"/>
                    </svg>



                </div>
                <span class="CSNFTHeader">Add your NFTs</span>
                <span class="CSNFTdescription">Sed ut perspiciatis un de omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</span>
            </div>
            <div class="CSItems">
                <div><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="60" height="60" rx="16" fill="#DF4949"/>
                        <rect x="23" y="24" width="13" height="4" fill="white" fill-opacity="0.4"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M26.125 18H33.8375C37.225 18 39.9625 19.284 40 22.5478V40.7631C40 40.9671 39.95 41.1711 39.85 41.3511C39.6875 41.6391 39.4125 41.8551 39.075 41.9511C38.75 42.0471 38.3875 41.9991 38.0875 41.8311L29.9875 37.9432L21.875 41.8311C21.6888 41.9259 21.475 41.9871 21.2625 41.9871C20.5625 41.9871 20 41.4351 20 40.7631V22.5478C20 19.284 22.75 18 26.125 18ZM25.2753 27.1437H34.6878C35.2253 27.1437 35.6628 26.7225 35.6628 26.1958C35.6628 25.6678 35.2253 25.2478 34.6878 25.2478H25.2753C24.7378 25.2478 24.3003 25.6678 24.3003 26.1958C24.3003 26.7225 24.7378 27.1437 25.2753 27.1437Z" fill="white"/>
                    </svg>


                </div>
                <span class="CSNFTHeader">List them for sale</span>
                <span class="CSNFTdescription">Choose between auctions, fixed-price listings, and declining-price listings. You choose how you want to sell your NFTs!</span>
            </div>
        </div>
    </div>


    @include('mainpartials.footer')
    @include('mainpartials.scrolljs')
</main>
@endsection
