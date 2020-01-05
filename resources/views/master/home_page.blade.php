@extends('layouts.master_page')

@section('content')



<!-- banner -->
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides callbacks callbacks1" id="slider4">
                    <li>
                        <div class="banner-top1">
                            <div class="banner-info_agile_w3ls">
                                <div class="container">


                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner-top2">
                            <div class="banner-info_agile_w3ls">
                                <div class="container">



                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner-top3">
                            <div class="banner-info_agile_w3ls">
                                <div class="container">



                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
<!--<div class="slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('front_end/images/doctor.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQEBUQEBAQEBUVFxUQFRAQFRUVFQ8QFRcXFhURFRUYHyggGBolHRYVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGhAQGy0lHyUrLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBEQACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAAAQMEBQYCBwj/xABEEAABAwEDBggLCAICAwEAAAABAAIDEQQSIQUxQVFxkQYTFCIyYYGSBxUzUlNyobGywdEWQmJzgqLh8CNjQ8IkNPE1/8QAGgEBAAMBAQEAAAAAAAAAAAAAAAECAwQFBv/EADMRAAIBAwIEBQIFBAMBAAAAAAABAgMREgQxEyEyUQUiQWFxFEIjM4GRsVKh0fBi4fGS/9oADAMBAAIRAxEAPwD1FdBxggBACAEAIAQAgBACAEAIAQAgBACAEAIAQAgBACAEAIAQAgBACAEAIBEBw6ZgNC5oOokBTZkXQgnZ57O8ExfYXQGdnns7wTF9hdALQzz2d4JixdC8czzm7wlmLocUEiIAQAgBAKgGZrTGzpyMZ67g33qG0iyjJ7ISK1xP6Ekb/Vc0+4pdMOEluh9SVOJHhoJOYYqUruwuMC2s1P7pVsGRkHLW+a/ulMGLi8tbqf3SmDFxyCdr60rhgaiiq4tBO5wbW2pFHmhoaNJxU4MXE5Y3zZO45TgxcDbG+bJ3CmDFw5Y3zZO45RgxcOWN82TuOU4MXHIZ2vrSuGcEUpVQ4tBO44qkioAQCICA/IptL5HNeGuaWChGBBaNWIK04uCRVUs7tHFnyEOPkgDzVrGuDiM7jStRqxU8byqVvUlUfM43C1ZDDZYYXPNZL1S0YNIaSKVz/wBzIq14uSWxDo2kov1G7ZkDk7WOe+8XSCOjRQBpDjXHTgP5UwrZPkvQiVHFK79SbauD/FNfIX1DaFoAxOI6X8Ksa+TSsXlQxTdyUswIgOZZWtFXODRmq4gYqUm9iG7CRTNf0XNdTPdINNyNNbhNMq+E3CKDJ8PGzEknBkTelK4aBqAwqdHaAs6lRQV2dFChKtK0TyDL3Dy32skCU2eM5ooCW4fik6Tt4HUuCeonI9qjoqVP0u/cy7hU1OJOcnEnaVhdnWuWwgaNQS7BdZJ4U26ykGK0yU9HIeMYRquurTsoVpGtOOzMKmmpVN4noeQ/CTDaGGK1NFnkIoHjyT3bTiw7ajrXdQ1MZSSlyPK1Ph8oJuHNf3PUbIf8bPVb7gpluzGOyGrdarlBWhdpz3W6TTWrQhlzKVamNkPQTteKtNfkqyi47l4zUtiqb5ab1m/Cuj7InLLrZIyL/wAv5h9wVK3p8GtDZ/JYOeBnNNqxSubNpbjZtLPO9hU4MrxIittDT97fgmLCnEcqqlymHlptrfhXV9kTjl1seVQIgFQCICVkLpzesz4Aq1dka0fU4sv/AOhN+W3/AKo/yl8iP5r+Ayn/AO5Zv1/CUh+XL9BP8yInCnoRfnM+F6UN38Cvsvkm5a8g/YPiCpS60Xq9DK1anORLbbhEWtIJLq0pTDN9VeMblZSsU9ttbpA1rqUvA4DqK3jBR2MpSbMVl3h46yufBYwwuqA6Z3ODCKgtY3MTXScNFCvP1WqtLGJ6+i8PyjnU9fQw2VssWi1vD7TK6VzRdBcGi62taANAAxXnTnKe57FOlCmrQViEqGgIAQAgBSD0TwacPnWZzbHa31gJDI5HHGzE4BpPo/h2LelVtyZxanT5eaO56flmcF+BFAA2vXie3UvVoxtE+eryvIk5EaauOigG0/33qlf0RpplzbG2+Wm9Zvwq32RKy62P5F/5fzD7gs63p8GtDZ/JLns141rQqkZ2Lzp5cxjkbtY9qvxEZ8JiixnSQnERPCZKijuiiybuzWMcVYqR5aba34V0/ZE5ZdbHVUCoAQCICntmV5LNJJccGtJZXmhxJu4UrsK1VOM0rmbqyg3YahyxK2R85c28QASG4FoApQdgV+FFxsQqsk3IJssSyOjmDheBNwloFK1aajeipRSaDqybUhubLcs4becHNa68OaGm8B7sUjSjHYSqyluSpMvSy3oi4GlA4XQNIzHaoVGK5os60pcmXCwLlM//ACWvqjb7QPq72LZcofJlvMxvDjLJs0Aaw0kkJa0jOxo6T9uIA6z1LPV1uHCy3Z2eH6bjVLy2R5WF4h9KCgCoAQAgBACARSD2zwWWltusZZI4mSAiJ1aEuiIrE7deb+helQ1Lxt2PC1ujiqmS2Z6HDCGNutFAP7VHJyd2ZRioqyKlvlpvWb8K6fsicsutj2SXUEp/2Hq0BUqq7XwaUXZP5JvKNneCyxNczqOWursNUasSpXOTOOrvBMSMwE+zvBMRmVg8tNtb8K6Psic8utjqqQCAVAKGk5gTsCE2Zncr2eTjnERvIo37hIOA6l0U5Rx3MJxlfYZs9mlxrHJ2tdj7FfKPchRl2CezSUFI5Oxhw2UGCZR7hxl2G47NLUVjk7hHbmTKPcjGXYlMs0lfJvzipuHGms0xUZR7lsX2NEWOz3XbiuW6N7Mq8j2WQCR72PDnEihaQdZ9p9i1qSXJIzhF820eK8PbU6S3PaagRBsQB0UF52Gg1cdwXl62eVV+x9D4dTwoL35meXIdxqPBxk0T24FzQ5kTHSOBFQSRca0g+sT+lUqytEFtwq8Hr2Ey2EX2ZzZyecz8snpDqOO1VhWT5SIMFIxzXFrmlrhgWuBDmnUQcQtiRFAJmR7I2edkLnXOMqxrzmbIQeLr1F1B2o3ZXBHtNnfE90cjSx7SWuac7XDQgG0BtvBJN/5r4SXASROPNJFXxkEewvXZo54yaPO8ShlST7M9f5E3zpO+V6ObPDsOQWcMrSuOepqocmwlYcyVml/MOauoalWruvg1pdL+SXU63fv+izLf76jkNa6e298wokWiNknWf3/RSR/vqAJ6/wB/0QIrx5aba34Vt9kTCXWx1VAqAEBIs1rLBQAHGqrKNy8Z4oS25adG28GA4gUqVMKKk7XJlWaWxA+1D/RN7x+i0+mXcp9S+wfah/om94/RPpl3H1L7Ft4yPmjesOGacV9g8ZHzRvThjisPGR80b04Y4r7B4yPmjenDHFfY+aOFkhflC1uOc2mfcJXADcAvNqdbPoqP5cfhFUszU9Z8FuS+Ksjp3Cjp3Xh+UyobvN87CFzVpXdiDVeMYL13j4b3m8Y2u6qyxfYXGsqZGs1qFJ4WSanEUcB+F45w7CpjOUdgZe2eDOyONYpZ4vw1a9o7wr7Vqq79UCotXg4ERDjlGOLGrXSRhhBGYg8ZnV1Wv6C5b8LODAt0LZ4ZIpbSxoDnRUDLSAM2c3XaserrFITxdnsEeVPYWktcC0gkFrgQWkYEEHMV0kmk8GzQ7Ktmaa0cZGmhoacU/TuW2nk4zTRzauKlRkme9tyVAcxcaank0Xo8aa/8PC4MGRLPGGSStFaAgCproWrd4pmFrSaJOSaUlqK/5DgNgWdXdfBrR2fyTaN813tWfPuacux1HTQCNqh3LRt6DVpkjjFX4b8VaKlLYrNwjuJZZopMWGtNGNUlGUdyIShLYgDy021vwrb7ImEutjyqBEAqARAcTwteKOzZ9SlSa2IauR/FsWo7yr8SRGCDxbFqO8pxJDBEtZlgQAgBAfP3DqG5lK1N/wBpf3wH/wDZeXXVps+k0jvRi/YqLJE172te4sYS2/JQni4yQHPwBzArJJvY2lJRV2enWjLTbU0Q2HJ9otsMYEYvO5PZXBvNzuxkApmIphmWao4c5ySf7s5+O5dEWyqtz2mQWaXIuTzIR5GC1QsnApXAAAk0xotFBWyU3b3XIr9RNOzXP5LTgfb7HZ5jBft1le/mtsluwYDXPEaU6s+Kzq0ptXVmu6NI6iLdnyfuXvCDhHY4Iyx9oIdIC1gs3PlJOFWAAgGuYnCqyp0Zyd0v3LTrwjuzA3YYXte7JrnmTozZZtUcb5D+U7PnGJ1rrUL/AHf/ACjGWpl/Tb5di9Jns7hK/IgioK8fk2VhkaPUaAXjqNRhmWWMJclP90WdWouco/sZ/h9lWxWvipbLedJmlfcLcCOYyQnC/wA12GoHRRTGlOC8xpTrRm7IY8GkN/KkArQDjnE+aBDJj7Vvp/zEU1f5Mj1zJkhjmbo51xw1gmhH91L3KiUoM+YpvGaLVvlpvWb8Kx+yJpLrY5kzoy/mHVqGtVq7r4L0ul/JJw/D+xUL/wC+g7Z6V0dl35Ksi0Cn4RxOLmnOKZtmf3+1dGnasc+oTyuN8HoncZXMAMfcrahrErQTyJQ8tNtb8Kp9kS0utjqqAQCoBEAIAQCoBEAIBUAiA8U8LVmuZSL6U4yKOSusisfuYF52qXnPe8PlejbszT+Dfg7xFnM8zRfnFLrh0YDmaQfOzkaro0Lzqs+dl6Ha+Ze5CeIr1jNGuhJEbcBfsxNYnMGkNBuHrYdYVaiy8/f+TKm7eXt/BhrXwCtjspGYObxTp+U8cXc5rb/GXbue8Mw0YDELtjqoKlb1tY5Hpp8S/pe5srfY4bdaWskYyaKzhxcHYsNpfQNZqJa0OJB89q5IylTjdcm/4OmUY1JWfNI4t+SLNZXx2yCzxRGJ1JTDG1pNne0scSG0qG1a/XRhopjUlNODe/8AIlTjFqSRmuH3BG1W20stNl4uVjo2x4vADKFxDq5iw3q4VOfBdGmrwpxxlyMNRQlUllE2NncLDY4mSvvmKNkVfvTyNaGhrAcS5xFAOtcjXEm2vU6U+HBJmN8IFi4jJsDHBokdaOOlLczp3slfI6unnOIrqAWsJZTfwWpxxRF8Dlkv26STQyK7+qV7G/CHrv0q81zk8Qlamo92eqZOyTLxofILoBvZwbzs4pTrXqVK0cbRPDp0ZZXZIb5ab1m/Cq/ZES62PZIFRKP9h9wVK3p8GlFXT+SfxXWfZ9Flka4nTWU0k7VDZKViry/Z3ycW1jSTV2bRmxJ0LehJRu2YV4uVkjjIdlkjkeHgjAUOcHE5iprzjKKsRRg4t3AeWm2t+FT9kSsutjqqQKgBACAEAIAQAgBACAEB5V4a7Pz7NJTO2WMnYWED9zlxatbM9jwuXKS+C34DcLBbWiCRrhNGwOc/C7IAQ28NIOIqKLyatPHmj0zS2ywxTACaKOUA1F9oddOsVzHrCzjJx2ZVxUtyKchWbMY6jzXPkc3ul1PYrcWfcrwok2GFkTQxjWRtGDWMAa1o1ADAKjbbuzRJLkju+K00qCbEA5DstSRC1lSSeKLo6k4kkMIqVpxZ9zLhR7DlmyTZ438YyFgfSnGEXngHOA91XU7VDqSas2SqcU72MP4X7RzbPFrMkh/SGtHxFbUFuy5YeBqJ8dnnmZGwl8ojvPrWkbQRTqrIV62khFxbZ5HiVVqaiux6Jy20eZFvK6uHDuzzuNPsNQNfee94aC4g0aajAUVnaySM+bbbCAzRl1ziqOcXc69X2JLGVrkxlKOw7yq0/wCj96rhT9y/Fn7Byq0/6P3phT9xxZ+wcqtP+j96YU/ccWfsHKrT/o/emEPccWfsNQMfee992riDza0FBTSrNqySM+d22PKpIqAEAIBEBTZdtL2ua1ri0UrhhU1W1KKa5mVRtMrOWy+kf3itcI9jPJ9zplul9I/vFMF2GT7nfLJfSP3lRjHsTkw5ZL6R/eKYrsMmHLJfSP7xTFdhkzD+FTKgkFmgvBz2CSR+tt4hrAeujSd2teVrmslFHveEweDm/XkZzgZlUWW2xSONGGsTzqY/C8eoG6exedNZRaPWPclxEHMjw0EnMBU0xwHUpQHY7K6Rgc1pe1wBDm4gg6cFr9PU7GbrQi7N80OQZJkGZhGsuIHvUx0tR+hWWrp9yBJaAZuKjcyQNF6R7cWtOZrAdJ17EqUuGub5m0G5Ryat2JCwB494T7ZxlvLAcImMj/UeefibuXXSVoko1ngeyvGYH2QuAka90rWnAyRuDakayCDXqIXqaWaxxPG8SpPNT9D0VdR5gIAQAgBACAEAIBUAIAQAgEQFDwi8o31fmVvR2Mam5UrYzBAOtNVAOkBU8IW2zi62NzAcatI559RxN0HqI7VhX4tvwzr0joZfjL/fc8qtfGcY7jb/ABlav4yt6911xXhzyv5tz6injisNvSwyqlz1jwdcKBPGLJMf8sYoxx/5ohmx85unWMda5qtP7kQ+RtlgCodk50RJifM1pJN2N7mhpPU1dMK7ta5snTn1pX90MOsD5MHvnf8AmPcQN6tKs/Vl1w4bJfoWuT7E2Fl1u0k5yVzSlkzCcnJ3K7hXwhZYYDIaOkdVsUfnv1nU0ZyezSrQp5P2K+x4faJ3yPdI9xc5xL3OOdziakrrJOrJHI+RrYg90hIuCOt8u0XaY1Vopt8ismkm5bHufAnJ+UIoq2+0ukJAuwG64xDW+WlXO6q0Gs6PSpRml5meBqp0ZS/Dj+pplscgiAEBV5Xys6B4aI79RerUimJFMy0hBSW5nObiyD9o5PQe0/RX4S7leK+wfaOT0HtP0ThLuOK+wfaOT0HtP0ThLuOI+wfaOT0HtP0ThLuOI+wfaOT0HtP0ThLuOLLsaNYGwIAQFBwi8o31fmV0UtjGpuVK1MxQEA5xZbigOlABATzkKy2yztbaIWSUvAOzPZiei8YjeuStCMnzR2aetOkvKzHZY8FLQC+zWq4AC67aG1AAx8ozMP0lcUtKvRnqU/E/Scf2HOAXg/dK1s8zzHFS+3iy5sk0gJDXVwLGClRTE9WNUaairP8AUipqM22t/T2/7J3B7hWXScktYuzNcYuMHRe9pukOH3XVGw9SjX+FYRdaj0727GWh8UzkqNXq2v3NaF4Z7YICh4ScJ4rGLtOMlIqGDMBoc86Bhmz+9ejofDp6rntHv/g87XeIQ03LeXb/ACQMu8CJ7VYoraHukmfGHzwPJoWu57TCPuOYCBdzGlelW93zoQjJwht/vM5aepm4Kc+rf/r4M1wV8HgtbeMltN1gJHFxNq+nW52DTgdBVI6T1bN6niaXKMefuenZC4PWWxNu2eIMJwdIedI/1nnGnVm6l0wpxhsedVr1KrvJlhf5906RUdmBHuWluVzC/Ow0HEzUqaBpw0fd+qt9pH3ElULCoDuHpDaFEti0d0OWzKHFuu3a4A1rT5KsKeSvcvUrYO1hjxx+A97+Ffg+5T6n2Dxx+D938JwPcfU+weOPwfu/hOD7j6n2Dxx+A97+E4HuPqfYEKiIBUBQcIum31fmVvS2Mam5UrYzO4ekECJMmY7ChYjscoKj9ms75HXY2lx1D3nUFEpKKuy0YuTsjX5JyQ9kYbIQDiaNxzmudcdSqm+R2QotLmQeHkYiydMGCjn3IQTiaSPaw+wlZOTZsoJF1HC2NrY2CjWNDGjU1ooB7FUseIeEiwGDKMjhgJbs7SMMXdI7b4ce1e3pJZ0Vf4PE1awrO3yajgtljlUIJP8AkZRsg1nQ/t99V8l4lo/pqvLpe3+D63w3WLU0ufUt/wDP6k/KVubBE6V5waK00uOho6yVy6ehKvUVOPqdWorxoU3Ul6Hmljikt9tYx1S6aRrXU+6wkA06g33L7iFOOno4x2SPhp1JaitlLds+kGtAFAKACgGoLwz3UY3g3Z2MtdvhuijZmSimcccy+Rsro61ZSaKuCZevsmo71ZT7mbpdiqynLxbmVBrUnszEe1dFNZJnPPyvmQosqN43oHnXWaM9aVPsV3T8pRT5lysDUEB3D0htCiWxaO6IuWPKfpHzV6PSU1HWQVqYAgBACAtVgdAiAVAcPja7pNDtoB96lOwaucGzxjG5H3QpyZFkV1qtVmLCG3K6KMpp10WkYyvzM2425FfBMy828cKitRXCuOC2exRNXLiCazPddaIydAuUrvC52prc1TizR5NsjY21DWtLsTQAYaAuacm2ddOKSJioaGZ8IuGT5HeY+F52CZlUBdEoDzzwu5OvxwzDQXRE7Reb8L969Tw2V8ofqeV4nG2M/wBDzjIeU3WWcSY06L2+cw5xtGcbFrrtKtRScHv6fJnodW9NVU1t6/BY8Mcti0SCON1YmYgj77zndsGYdutcfhWheng5zXmf9kdfi2vWomoQflX92X3giyZftnGkeSY59dTncxo3Fx7F3a6WFG3d/wBjh0Mc61/RL+57OvEPcMlkMVyhlF/+yBna2IV96A0CAgZasnGREgc5vOGzSN3uC1ozxkZVoZRMdD5Vvrt94XfLZnnrc1q4zpEQHcPSG0KHsWjuhMoGG/zw8mg6OamPWlPO3Imrw8vMR71m82T+9qvap7Gd6XZiXrN5sn97U/E9hel2Yt6zebJ/e1PxPYXpe4l6zebJ/e1LVPYi9LsyQqliPaJy00FM1cVeMbopKVmNcrdqHtVsEVzYcrdqHtTBDNnL7SSCKDEEb0UUM2Vvi1mt3s+i0yZnYPFzNbvZ9EyYsSsmZPaJmULia6aZtPsqq1JeVl6cfMjbrgPSI2UrfHZ4nzyuusYLzj7gNZJoANZQGUbky2ZVjL7VK6yWeTFlkiDeMdHna6V7gcTnu01ZkAttyfbrAOOgtEluibjJZ7RQyXBndHIBWo1U3oDrhEY7dkx8kJvAs49h01jN4tI0HBzSunR1MK0X+n7nLrKedGS/X9jx3im1vUxX0mKvc+bydrCGEOpeAJ1hRjfcZW2PW/BNYbllknIxlfQHWyMUH7i9eL4nUvUUey/k9vwunam5d3/BsrVa2RCr3tZXNeIFd6809MzHA6ruVTH/AJbXM5vXG261p3BAaFACAyc+TmslJq7muqBhTA1HyXfGeUTzZxxkywgtBcaGizlGyLxk2yQqFzuHpDaFD2LR3RGyx5T9I+avR6Smo6yCtTAEAIAQFqsDoOS0HOAlwV+WMA2mGJzYLaluZzKu+dZ3raxmF86zvSwC+dZ3pYBfOs70sC44LsLp6knmtJ7TQfMrDUO0TfTq8rmuXEdpleFzePtVisRxZJI+0SDQ5kDbwa7WCSgNUgG5syAyHBmMQ2q22On+Nr2TsboDJ21cwDQAQpvbmQ1fkeWZTshgmkhP/G9zNoBIB7RQr6qlPOCl3R8pVhhNx7MiNfUV96unco1Y9/4OWDk9khhpQtY0O9c4v/cSvlq886kpd2fU0KfDpxj7GODTbJ5HyudzTQNGhtSA0agKb1maj2Sa2e2CJriWPztOwkE9YIz6kBsFBIICrtUX+YnPVrT2gkH2UXRCXksctWPnuIGjUEuVsKgO4ekNoUPYtHdBlCKIvq+QtNBhSuGOKU3JLkiasYOXmZG4iD0p3H6K+U+xnhT/AKhOIg9Mdx+iZT7DCn/ULxEHpTuP0TKfYYU/6g4iD0p7p+iZT7DCn/UPqpIiArstZm7T7ltR3ZnUKpbmYIAQAgNJwQj8o71W7qk+8Lk1L2R1aZbs0a5TqK2dkfKmvc1tWR3WvIFWmR4bQHRWimxDZZKCQQFObMxlqc8NAc+MVfTFwa6gBPVVAeZ+EqxcXbeMAwlY1/628x3sDT2r3/DqmVG3Y+f8Sp41su6KjgtYeUW2CLOC8Od6jOe4bmkdq6NTUwpSl7HNpqedWMfc97XzB9SZHKnB95ldLZpAwuJJaSQKnOQRXAnGhU3IsPZFyEYX8dK/jJMaUqQ2uBNTiTTBAXYKgkEBGtrcx2jf/wDFpTfoY1VsyItDEVAdQ9IbQolsWjuiNljyn6R81ej0lNR1kFamAIAQAgLVYHQIgK7LWZu0+5bUt2Z1CqW5mCAEAIDW8FGUgJ1vPsAC4dQ/OdunXlLpYG5n8syECZwztMAG0G/81rRV52MqztEuOVsuNeXBocARXTUVWFSUafU7G0IymvKh5rgRUEEHSNKlNNXQatyZCtrf80XWJB7AfkpIMb4UrFfs0cwGMb7pOpkgof3Bm9el4ZO1Rx7o8zxSnemp9mVXgiyeDPLNTCNgYPWkNfc095dHic8YRgvVnP4ZDKpKb9D1Gd9MP7ReKe2R0AjjTFA+QzZHVB21V5qxnTd7j6oaDNrHN7Qrw3M6nSQVqc4IDuHpDaFD2LR3QW+yX31vsbgBRxx04qKc7K1iatPKV7kbxePSx71pxfYz4P8AyQeLx6WPenF9hwf+SDxePSx704vsOD7oPF49LHvTi+w4Puh9VJEQFdlrM3aVtS3ZnUKpbmYIAQAgNnwabSzN6y4/uK4K/WzuodCLRYmxmMsS/wCSRh6JLSfWa0DOuSrVqX/CfNbnVSpU7firk9isiy3FI82QPDnRit26eYBStHUxzjSuSu6zjeoddFUVK1Mdg4QsgnbZ+M57heEbg6jhjmNKA4Hcp0/Gisoq6Ir8GTtJ2ZoY5uNlYWc4MDiXfdq4UDa6SvVPLOssZJbaoXwPNA8Uq0dEgggiuogFaUqjpzU16GdWkqsHB+o1wb4PxWCN0cTnuvOvudJQkmgFMAMMPaVfUaiVaWUimn08aEcYltdGpYG5QS5Sc1xF1uBI06DRedLWzjJqyPQjo4SindnRyiHNoRdJw6qbVvQ1kJStLkc+o0k4xbjzJFiOfs+a7pnDS9SSszYbtI5p/ulWjuUn0letjmBAdw9IbQolsWjuiNljyn6R81ej0lNR1kFamAIAQAgLVYHQIgK7LWZu0+5bUd2Z1CqW5mCAEAIDbZAH/jR7D8RXnVutnoUehFiszQhyZNic4vcCScaVNPYsHpqblk0brUVFHFMdiscTTVsbAdYAqe3OtFTitkZupJ7scdG0mpaCRgCQKgaqq5Q6QCoAQAgKG0WBzpn6G1rXXXHBedLSynVb2R6EdVGFJL1Hm5NjGs7T9FstHSW5i9ZUY/FA1nRHVnJXVFYxUVscsucnJ7scUg4n6J2KY7lZ9LK5bnKCA7h6Q2hRLYtHdCZRsT3vvNAIoBn04pTqKKsyatKUpXRF8WS6hvC040TLgTDxZLqG8JxYjgTDxZLqG8JxYjgTF8WS6hvCcWI4EyQqFgQFblrM3aVtR3ZnUKpbmYIAQAgNlwakvWdo80uad9fcQuCurTO6g7wLVYmwIAQAgBAcPeBnIG00QDD7fEPvV2AlANnKFejG87cAgBsjnYuaGnUDXBAKgBACAbtJo07laO5Sb8pXrY5hUB1D0htCiWxaO6I+V3HjM56I+avR6SmofnIV46zvWtkY3YXjrO9LC7C8dZ3pZC7C8dZSwuyzWBuIgK7LWZu0+5bUt2Z1CqW5mCAEAIC24P5TELi1+DHafNcNOz+FhXp5K63NqNTF2exp3ZRgAqZo6esFx4S7HXxI9yMcuwVDWuc8k0o1p+atwZpXZXjRbsh7lbz0YXbXc1ZmotLQ7TGz2n6IA5G49OV59XmoA8XxgE3anWSSgIosovGoFNFMCNyA65PToveO2oQBdlGlrtop7kAcc8Z4z+k19iA4kyhGyl8lldYOjYrxpylsZupGLszptuhIqJY+8AnDl2J4ke5Dfb2yuLWYhtDe1k6upaqm4q7MZ1FJ2QqFBEB3D0htCh7Fo7oaypA90lWtJFAKgbVNKSUeZFeEnLkiJySTzHblrnHuY8OfYOSSeY7cmce44c+wckk8x25M49xw59g5HJ5jtyZx7jhz7C8rd1JghmxOVu6tyYIZsiZRmLgK0znMrwjYhybIK1KggBACAEAIC34Lw3p73mNLu080e87lhqJWjY3oK8rmwXCdoIAQHL8x2FAREAIAQAgKHhO3Fh9YduC69M9zk1K5plGuo5iXk6UtJpTRnWc1clSsT+VO6lngi2bE5U7qTBDNjtltLi9owzj3qsoLFloTbki8XId4IAQAgBAebeNptY7oXqYI8jJieNptY3BMERkzl+UpXZyNwUqKROTOOXP1jcpsRkw5c/WNyWGTDlz9Y3JYZMOXP1jclhkw5c/WNyWGTDlz9Y3JYZM2XAO85ksjvODBhqFT8QXHqnzSO3S7NmhktVCRxcpppa2oOzFcp1nPLf8AVN3f5QEljqgGhFRWhzjqKAH5jsQEFodU1IpoGpAdoBjlP4JO7/KAUWj8Em5AVfC4EWe+3O1zT2Hm+8hb6d+exz6leS5iuXP1jcu+x5+TO48oytzEbgocUxkzvxtNrHdCjFDJh42m1juhMEMmKzLM4IIcKjEc0Z0cE+RKm07ok/ae1+kHcZ9Fn9PT7Gv1FTuH2ntfpB3GfROBDsPqKncPtPa/SDuM+icCHYfUVO4fae1+kHcZ9E4EOw+oqdw+09r9IO4z6JwIdh9RU7lMtjAEAIAQAgBACAEAID0bgRFSxtPnOe7cbv8A1XBqHeZ6OmVqZfrA6AQAgOX5jsQERACAEAICBl+O9ZZR+Au7vO+S0pO00Z1leDPNl6R5QIAQAgBACAEAIAQAgBACAEAIAQAgBACAEB6hwWZSxwj8N7vEn5rza3Wz1KKtTRarM1BACA5fmOwoCC0uvGoFNB0lAdoAQAgG7Sy8xzdbXN3ghTF2aIkrpnlYXqnjggBACAEAIAQAgBACAEAIAQAgBACAEAIAQHquQBSyw/ls+ELzKnWz1aXQvgsFQ0BACA5fmOxAREAIAQAgFCA8oe2hI1EjcvWWx473OUIBACAEAIAQAgBACAEAIAQAgBACAEAIAUg9XyH/AOrB+VH8AXl1Op/J61PoXwTlQuCAEBy/MdiAiIAQAgBAKEB5VaOm71ne8r1VsePLdjakgEAIAQAgBACAEAID/9k=" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="data:image/jpeg;base64,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" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div> //banner -->
<div class="clearfix"></div>




<!-- //middle section -->

<!-- services -->
<div class="why-choose-agile pt-5" id="services">
    <div class="container pt-xl-5 pt-lg-3">
        <div class="w3ls-titles text-center mb-5">
            <h3 class="title">Our Best Services</h3>
            <span>
                <i class="fas fa-user-md"></i>
            </span>
            <p class="mt-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row why-choose-agile-grids-top">
            <div class="col-lg-4 agileits-w3layouts-grid">
                <div class="row wthree_agile_us">
                    <div class="col-3 agile-why-text p-0 text-right">
                        <div class="wthree_features_grid">
                            <i class="fas fa-user-md"></i>
                        </div>
                    </div>
                    <div class="col-9 agile-why-text-2">
                        <h4 class="text-dark font-weight-bold mb-3">General health care</h4>
                        <p>Lorem ipsum magna, vehicula ut porta ete.</p>
                    </div>
                </div>
                <div class="row wthree_agile_us my-5">
                    <div class="col-3 agile-why-text p-0 text-right">
                        <div class="wthree_features_grid">
                            <i class="fas fa-syringe"></i>
                        </div>
                    </div>
                    <div class="col-9 agile-why-text-2">
                        <h4 class="text-dark font-weight-bold mb-3">Dental services</h4>
                        <p>Lorem ipsum magna, vehicula ut porta ete.</p>
                    </div>
                </div>
                <div class="row wthree_agile_us">
                    <div class="col-3 agile-why-text p-0 text-right">
                        <div class="wthree_features_grid">
                            <i class="fab fa-medrt"></i>
                        </div>
                    </div>
                    <div class="col-9 agile-why-text-2">
                        <h4 class="text-dark font-weight-bold mb-3">Medical Treatment</h4>
                        <p>Lorem ipsum magna, vehicula ut porta ete.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 agileits-w3layouts-grid img text-center">
                <img src="{{asset('front_end/images/b3.png')}}" alt=" " class="img-fluid" />
            </div>
            <div class="col-lg-4 agileits-w3layouts-grid">
                <div class="row wthree_agile_us">
                    <div class="col-9 agile-why-text-2">
                        <h4 class="text-dark font-weight-bold mb-3">Cardiac Clinic</h4>
                        <p>Lorem ipsum magna, vehicula ut porta ete.</p>
                    </div>
                    <div class="col-3 agile-why-text p-0">
                        <div class="wthree_features_grid">
                            <i class="fas fa-medkit"></i>
                        </div>
                    </div>
                </div>
                <div class="row wthree_agile_us my-5">
                    <div class="col-9 agile-why-text-2">
                        <h4 class="text-dark font-weight-bold mb-3">Orthopedics</h4>
                        <p>Lorem ipsum magna, vehicula ut porta ete.</p>
                    </div>
                    <div class="col-3 agile-why-text p-0">
                        <div class="wthree_features_grid">
                            <i class="fas fa-wheelchair"></i>
                        </div>
                    </div>
                </div>
                <div class="row wthree_agile_us">
                    <div class="col-9 agile-why-text-2">
                        <h4 class="text-dark font-weight-bold mb-3">Laboratory</h4>
                        <p>Lorem ipsum magna, vehicula ut porta ete.</p>
                    </div>
                    <div class="col-3 agile-why-text p-0">
                        <div class="wthree_features_grid">
                            <i class="fas fa-hospital"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //services -->

<!-- blog -->
<div class="blog-w3ls py-5" id="blog">
    <div class="container py-xl-5 py-lg-3">
        <div class="w3ls-titles text-center mb-5">
            <h3 class="title text-white">Latest Disease</h3>
            <span>
                <i class="fas fa-user-md text-white"></i>
            </span>

        </div>
        <div class="row package-grids mt-5">
            @foreach($disease as $v_disease)
            <div class="col-md-3 pricing">
                <div class="price-top">
                    <a href="{{url('welcome/disease_details')}}/{{$v_disease->id}}">
                        <img src="{{asset('')}}{{$v_disease->disease_image}}" alt="" class="img-fluid" />
                    </a>

                </div>
                <div class="price-bottom p-2">

                    <h4 class="text-dark mb-1">{{$v_disease->disease_name}}</h4>

                    <a href="single.html">
                        <i class=" doc_img"> <img src="{{asset('')}}{{$v_disease->doctor_relation->doctor_image}}" alt="" class="img-fluid"></i>Dr.Rajib dafadfa
                        <span>{{$v_disease->doctor_relation->doctor_graduate}},{{$v_disease->doctor_relation->graduate_institude}}

                        </span>
                        <p style="margin-left: 60px">{{$v_disease->doctor_relation->doctor_exprience}}experience</p>
                    </a>




                </div>
            </div>

            
            @endforeach
           
        </div>
        

    </div>
    <a href="#" class="btn btn-primary">View more articles</a>
</div>
<!-- //blog -->

<section class="home_doctors text-center">
    <div class="container">
        <div class="b_bottom">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center mt-5">Department of Health Care</h3>
                  @foreach($department as $v_department)

                    <div class="col-md-2 col-xs-6  col-xs-offset-0 mt-4">
                        <a href="{{url('welcome/department_disease')}}/{{$v_department->id}}">
                            <img src="{{asset('')}}{{$v_department->department_icon}}" alt="#" class="img-responsive" style="display: block; ">
                            <h5>{{$v_department->department_name}}</h5>
                        </a>
                       
                    </div>
                
           @endforeach
                </div>
               </div>
             
                <br>
                <br>
                 
                <div style="float:right">
                    <a href="{{url('/welcome/department')}}" class="btn btn-primary" >View more Department</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home_doctors text-center">
    <div class="container">
        <div class="b_bottom">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center mt-5">Bangladesh top doctors are on our Healthcare bd</h3>
                  @foreach($doctor_info as $v_doctor)

                    <div class="col-md-2 col-xs-6  col-xs-offset-0 mt-4">
                        <a href="{{url('/welcome/doctor_single/details')}}/{{$v_doctor->id}}">
                            <img src="{{asset('')}}{{$v_doctor->doctor_image}}" alt="#" class="img-responsive" style="display: block; ">
                            <h5>{{$v_doctor->doctor_name}}</h5>
                        </a>
                        <p>{{$v_doctor->doctor_graduate}},
                            <span>{{$v_doctor->doctor_exripence}} experience</span>
                        </p>
                    </div>
                
@endforeach
                </div>
                 <br>
                <br>
               
                    <a href="{{url('/welcome/doctor')}}" style="float:right" class="btn btn-primary" >View more Doctor</a>
                
            </div>
        </div>
    </div>
</section>
<section class="home_doctors text-center">
    <div class="container">
        <div class="b_bottom">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center mt-5">List Category Disease of Health Care</h3>
                  @foreach($category_info as $category)

                    <div class="col-md-2 col-xs-6  col-xs-offset-0 mt-4">
                        <a >
                            <button style="background-color:silver"><b>{{$category->category_disease_name}}</b></button>
                        </a>
                       
                    </div>
                
@endforeach
                </div>
               </div>
             
                <br>
                <br>
                 
              
            </div>
        </div>
    </div>
</section>
        
@endsection
<!--markup footer-->