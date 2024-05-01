<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .primary-color{
            color: #27246a;
        }
        .accent-color{
            color: #786bbb;
        }
    </style>
    <title> {{ $title }} </title>
</head>
<body style="background-color: #f5f5f5; box-sizing:border-box">
    <table  cellpadding="0" cellspacing="0" style="background-color: #fff; margin:auto; margin-top: 20px; padding:20px; ">
        <tr>
            <td align="center">
                <svg width="135" height="36" viewBox="0 0 135 36" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="36" height="36" fill="url(#pattern0_16_25)"/>
                    <path d="M49.8295 25H44.9908V11.9091H49.8232C51.157 11.9091 52.3054 12.1712 53.2685 12.6953C54.2358 13.2152 54.9815 13.9652 55.5057 14.9453C56.0298 15.9212 56.2919 17.0888 56.2919 18.4482C56.2919 19.8118 56.0298 20.9837 55.5057 21.9638C54.9858 22.9439 54.2422 23.696 53.2749 24.2202C52.3075 24.7401 51.1591 25 49.8295 25ZM48.1548 22.3026H49.7081C50.4411 22.3026 51.0611 22.179 51.5682 21.9318C52.0795 21.6804 52.4652 21.2734 52.7251 20.7109C52.9893 20.1442 53.1214 19.3899 53.1214 18.4482C53.1214 17.5064 52.9893 16.7564 52.7251 16.1982C52.4609 15.6357 52.071 15.2308 51.5554 14.9837C51.044 14.7322 50.4134 14.6065 49.6634 14.6065H48.1548V22.3026ZM60.907 25.1662C60.2805 25.1662 59.7244 25.0618 59.2386 24.853C58.7571 24.6399 58.3757 24.3203 58.0945 23.8942C57.8175 23.4638 57.679 22.9247 57.679 22.277C57.679 21.7315 57.7749 21.2713 57.9666 20.8963C58.1584 20.5213 58.4226 20.2166 58.7592 19.9822C59.0959 19.7479 59.4837 19.571 59.9226 19.4517C60.3615 19.3281 60.8303 19.245 61.3288 19.2024C61.8871 19.1513 62.3366 19.098 62.6776 19.0426C63.0185 18.983 63.2656 18.8999 63.419 18.7933C63.5767 18.6825 63.6555 18.527 63.6555 18.3267V18.2947C63.6555 17.9666 63.5426 17.7131 63.3168 17.5341C63.0909 17.3551 62.7862 17.2656 62.4027 17.2656C61.9893 17.2656 61.657 17.3551 61.4055 17.5341C61.1541 17.7131 60.9943 17.9602 60.9261 18.2756L58.0433 18.1733C58.1286 17.5767 58.348 17.044 58.7017 16.5753C59.0597 16.1023 59.5497 15.7315 60.1719 15.4631C60.7983 15.1903 61.5504 15.054 62.4283 15.054C63.0547 15.054 63.6321 15.1286 64.1605 15.2777C64.6889 15.4226 65.1491 15.6357 65.5412 15.9169C65.9332 16.1939 66.2358 16.5348 66.4489 16.9396C66.6662 17.3445 66.7749 17.8068 66.7749 18.3267V25H63.8345V23.6321H63.7578C63.5831 23.9645 63.3594 24.2457 63.0866 24.4759C62.8182 24.706 62.5007 24.8786 62.1342 24.9936C61.772 25.1087 61.3629 25.1662 60.907 25.1662ZM61.8722 23.1207C62.2088 23.1207 62.5114 23.0526 62.7798 22.9162C63.0526 22.7798 63.2699 22.5923 63.4318 22.3537C63.5938 22.1108 63.6747 21.8295 63.6747 21.5099V20.5767C63.5852 20.6236 63.4766 20.6662 63.3487 20.7045C63.2251 20.7429 63.0888 20.7791 62.9396 20.8132C62.7905 20.8473 62.6371 20.8771 62.4794 20.9027C62.3217 20.9283 62.1705 20.9517 62.0256 20.973C61.7315 21.0199 61.4801 21.0923 61.2713 21.1903C61.0668 21.2884 60.9091 21.4162 60.7983 21.5739C60.6918 21.7273 60.6385 21.9105 60.6385 22.1236C60.6385 22.4474 60.7536 22.6946 60.9837 22.8651C61.218 23.0355 61.5142 23.1207 61.8722 23.1207ZM74.228 15.1818V17.483H68.0341V15.1818H74.228ZM69.3317 12.8295H72.4574V21.9126C72.4574 22.1044 72.4872 22.2599 72.5469 22.3793C72.6108 22.4943 72.7024 22.5774 72.8217 22.6286C72.9411 22.6754 73.0838 22.6989 73.25 22.6989C73.3693 22.6989 73.495 22.6882 73.6271 22.6669C73.7635 22.6413 73.8658 22.62 73.9339 22.603L74.407 24.8594C74.2578 24.902 74.0469 24.9553 73.7741 25.0192C73.5057 25.0831 73.1839 25.1236 72.8089 25.1406C72.076 25.1747 71.4474 25.0895 70.9233 24.8849C70.4034 24.6761 70.005 24.3523 69.728 23.9134C69.4553 23.4744 69.3232 22.9226 69.3317 22.2578V12.8295ZM78.5906 25.1662C77.9641 25.1662 77.408 25.0618 76.9222 24.853C76.4407 24.6399 76.0593 24.3203 75.7781 23.8942C75.5011 23.4638 75.3626 22.9247 75.3626 22.277C75.3626 21.7315 75.4585 21.2713 75.6502 20.8963C75.842 20.5213 76.1062 20.2166 76.4428 19.9822C76.7795 19.7479 77.1673 19.571 77.6062 19.4517C78.0451 19.3281 78.5138 19.245 79.0124 19.2024C79.5707 19.1513 80.0202 19.098 80.3612 19.0426C80.7021 18.983 80.9492 18.8999 81.1026 18.7933C81.2603 18.6825 81.3391 18.527 81.3391 18.3267V18.2947C81.3391 17.9666 81.2262 17.7131 81.0004 17.5341C80.7745 17.3551 80.4698 17.2656 80.0863 17.2656C79.6729 17.2656 79.3406 17.3551 79.0891 17.5341C78.8377 17.7131 78.6779 17.9602 78.6097 18.2756L75.7269 18.1733C75.8121 17.5767 76.0316 17.044 76.3853 16.5753C76.7433 16.1023 77.2333 15.7315 77.8555 15.4631C78.4819 15.1903 79.234 15.054 80.1119 15.054C80.7383 15.054 81.3157 15.1286 81.8441 15.2777C82.3725 15.4226 82.8327 15.6357 83.2248 15.9169C83.6168 16.1939 83.9194 16.5348 84.1325 16.9396C84.3498 17.3445 84.4585 17.8068 84.4585 18.3267V25H81.5181V23.6321H81.4414C81.2667 23.9645 81.043 24.2457 80.7702 24.4759C80.5018 24.706 80.1843 24.8786 79.8178 24.9936C79.4556 25.1087 79.0465 25.1662 78.5906 25.1662ZM79.5558 23.1207C79.8924 23.1207 80.195 23.0526 80.4634 22.9162C80.7362 22.7798 80.9535 22.5923 81.1154 22.3537C81.2773 22.1108 81.3583 21.8295 81.3583 21.5099V20.5767C81.2688 20.6236 81.1602 20.6662 81.0323 20.7045C80.9087 20.7429 80.7724 20.7791 80.6232 20.8132C80.4741 20.8473 80.3207 20.8771 80.163 20.9027C80.0053 20.9283 79.854 20.9517 79.7092 20.973C79.4151 21.0199 79.1637 21.0923 78.9549 21.1903C78.7504 21.2884 78.5927 21.4162 78.4819 21.5739C78.3754 21.7273 78.3221 21.9105 78.3221 22.1236C78.3221 22.4474 78.4371 22.6946 78.6673 22.8651C78.9016 23.0355 79.1978 23.1207 79.5558 23.1207ZM86.3697 25V11.9091H89.5337V17.1634H94.6921V11.9091H97.8498V25H94.6921V19.7393H89.5337V25H86.3697ZM107.754 11.9091H110.912V20.353C110.912 21.3288 110.68 22.179 110.215 22.9034C109.751 23.6236 109.103 24.1818 108.272 24.5781C107.441 24.9702 106.476 25.1662 105.376 25.1662C104.264 25.1662 103.293 24.9702 102.462 24.5781C101.631 24.1818 100.985 23.6236 100.525 22.9034C100.065 22.179 99.8345 21.3288 99.8345 20.353V11.9091H102.999V20.0781C102.999 20.5298 103.097 20.9325 103.293 21.2862C103.493 21.6399 103.772 21.9169 104.13 22.1172C104.488 22.3175 104.903 22.4176 105.376 22.4176C105.849 22.4176 106.263 22.3175 106.616 22.1172C106.974 21.9169 107.254 21.6399 107.454 21.2862C107.654 20.9325 107.754 20.5298 107.754 20.0781V11.9091ZM112.895 25V11.9091H118.354C119.334 11.9091 120.154 12.0476 120.815 12.3246C121.48 12.6016 121.978 12.9893 122.311 13.4879C122.647 13.9865 122.816 14.5639 122.816 15.2202C122.816 15.7188 122.711 16.1641 122.502 16.5561C122.294 16.9439 122.006 17.2656 121.639 17.5213C121.273 17.777 120.849 17.956 120.367 18.0582V18.1861C120.896 18.2116 121.384 18.3544 121.831 18.6143C122.283 18.8743 122.645 19.2365 122.918 19.701C123.191 20.1612 123.327 20.7067 123.327 21.3374C123.327 22.0405 123.148 22.669 122.79 23.223C122.432 23.7727 121.914 24.2074 121.237 24.527C120.559 24.8423 119.737 25 118.769 25H112.895ZM116.059 22.4496H118.015C118.701 22.4496 119.206 22.3196 119.53 22.0597C119.858 21.7997 120.022 21.4375 120.022 20.973C120.022 20.6364 119.943 20.3466 119.786 20.1037C119.628 19.8565 119.404 19.6669 119.115 19.5348C118.825 19.3984 118.477 19.3303 118.073 19.3303H116.059V22.4496ZM116.059 17.2912H117.811C118.156 17.2912 118.463 17.2337 118.731 17.1186C118.999 17.0036 119.208 16.8374 119.357 16.62C119.511 16.4027 119.588 16.1406 119.588 15.8338C119.588 15.3949 119.432 15.0497 119.121 14.7983C118.81 14.5469 118.39 14.4212 117.862 14.4212H116.059V17.2912Z" fill="#27246A"/>
                    <defs>
                    <pattern id="pattern0_16_25" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_16_25" transform="scale(0.0111111)"/>
                    </pattern>
                    <image id="image0_16_25" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAErElEQVR4nO2dW2gdVRSGd7xfKEJF8FKJnbX2XpOjxsupICpEtI/6mJc+KLaQnLVOioqgDyLxRRCqqI/10UefBPHJu0ZFEUREqXdbq7VNUUSUemki6yRV6UniTDL3WR8sSDgz+/KfmX1m73+vc5wzDMMwDMMwDMMw1k/3oqlzCLlHyHOE/NNy6N89fW0DRRtKpzN5Rgw8FUC+J5TFFQNkPiA/sGXLvWcPTjKS0+1One6B7yDgr1YVeEhw/paQ70bcfWaKqtrK7CmEPBmQP08s8EkRUPbrXTAxMXta2b2pssCfrlfgIcFBvlbBnZs8tezeVYERQr6dgD/ISuAVxvBPdBjSN9O1Ee95e0B5PzeBh4eUj/Su0TfXtYEQyU0E/HpRAq9whb+rd5FrKiGauTGgvFKawENXOL8dIrnVNYUYe9cH4OfLFnb14LkYecLVFYr6VxLKs4SyUL6YiYaUF8NWvs7VhTGQy2slMA4LHkP/WldVQpiJCfkZQvmrdLFww7Ggw13YyuOuKoxdJqMBZW8A/rMCAi1mG3xc786xaNqXJjAAXxqAnyLgY+ULIrlGAPlD71bvOSp0wScgP9YGgenkAD4WUPaoBrkLTSiPl95hLPkKR9mTu9AB+GjZHaWyA2TehMYihOYj+Qut43PZVxS2YOgYfBiCPLn86LPYruDjBPxEIR+GJ0Cc7ixNUFoh+IJOYBB717iyiKPeFbWecmOSKTl3XVXQ6eqy4I0ROFR5kan6y6LyP8FzBP2bXZ0W+gnl5fKFk0QRUN6qtRGg1lUAea2yAoO80yhry3veTijvlS3sf+LDRpu1vmD3u+1u+Eju+zmaur9DHZaA8pD305ek26HU25HlDqXhK1jL7u1II7D2QfuifXJVdVgCyO/6P1H/4vRbwuSzDAX+Ju0ePMTdFxDIo4T8W30clqVF8r2dUblwHbtIv9iAyAfS7iqN4/75KnBA+bW2DksA/iUgP9Lp7NqcZl90QBYCOZhiDD6o5+i5yevZtVnbpm1sjsMC/DMBPxxFU+clrWt09M6z9OoMyIfWGCIO6TF6bNJytQ3alkGbmuqwBJQfCfhBop2b1pFa8aaev1SGvJE2tULr1LoH57fGYYFBSsT94+P3nZt3m7UOrUvrbK3DEpB/CNi/J48cFC1Ty9Y6sm1zjR2WAPxdDDKTRQ6KlqFlaZm1d1i857GcHJYD6036+ffxUL7Mw2HxXq52ZeH9zFWE/FzmDgtoRhbflWTCocfosamyuBIKrH3TPrqqQFF/GyG/kHFHF/WDh5Cf1rWRgU+pTw60c5PeUTH2bxu8Njgm43q1L1F/m6sqTXBY4jptTCfgGwj5pToJHKLeLa7WDgvyq+ULuXKYw4KFOSzNxJvD0niH5WNzWED25TgG7zOH5R/MYVkVc1hyxhwWMYfFJcQcllUwh2Vjj1vz5rCsgTksYg7LCcxhwUTDijksK2EOS8GYw1Iw5rAUjDksBWMOS8H46uawNBNvDkuhjJjDUiizSykVOTosunvJvnW3Yg5La+iWlMPSasFj4KlUOSwoh/W7/tOkWBhDP6awxj5n4CP2YwoZ0c0oh8UwDMMwDMMwDMNww/wNsuzxq4Gd73YAAAAASUVORK5CYII="/>
                    </defs>
                    </svg>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h2 class="primary-color"> {{ $title }} </h2>
            </td>
        </tr>
        <tr>
            <td align="center">
                <p>Dear <b> {{ $username }} </b>,</p>
                {{ $slot}}
                <p class="accent-color">For any assistance, please contact the IT department.</p>
            </td>
        </tr>
    </table>
</body>
</html>