<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Customer Service</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">

    <!-- Logo -->
    <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPkAAADKCAMAAABQfxahAAAA4VBMVEX39/c7RVL29vYreMI8RVEtdbksdrwreMP8/Pwrd7///fr9/fz7+vg1QE4sOEcyPUttdH0nNEQNb78hdMHCxMcAbb7u7+8jMUHi4+Tt8fWgpKk8QUjm5+jS1Na7vsGnqq84gMWaudx9gopHUFyRlZuEq9ZfZnDHyczj6vJjl85Wj8vM2+sYbreVtdqIjZNzeYK2zORUW2VyoNKxyOJMisnF1ulCTFmlqK2Lr9inweDL2usvbap8ocqZt9tdj8UzfsUYKDoyYpM3VXc5TGArPlU4UnAcWpIxaKA2WH5SkNFRcpNOMHAvAAAYQklEQVR4nO2dCXuiSrqAERdKKEAgcUtQo4kaJUazdezT3TkzZ/rO3Pv/f9CtlbVANGWWM6l55tARKOqlqr6tFhTlK32lr/SVvtJX+kpf6St9pb9TUtX4QREfCq95h5NSUuIB6ee84Ul1j5MS04djKz65N19u+mTg8sg/KtunAf+vrfE3fSsy0n8tuCKbDf8HhknZfed7gQszPhQcoeq62pvPv6/vtyitH5fznop+o6/gbwoOdagu72+uFyPXCwLP9TxycN2Xxa/n+yXih4UZ7P1WZKRXg6Nana+vFhjV07RqvVHFqVEnh2aj6qEX8fBjPUeV/+nA1fyiQV39/jxCbBonjoNrzXqT8NcD13t5fmzrgob/vuA7WnNO0RD24486osZsAvBqCI5/1bygcbdWUb94tUB9M3DxSajPn0duQNh4G6+La5yf1Dz35WrJhP67ghf6hoWFQJJ8vTj1IjYtA14VntSC4GGtwOJnHr2p87Q/OFS3SIprWTatqmlY1BHhjv+K1Th/K5r7su3pnxIccVddLazUKgHHxK5bHY1+/Xi++fnz4ub5ajEaVV30HpDET/WDoH6hwoPAj9Hiy4JDeF/H3HH5hTqwN/rx8/u8p+OEjRpI/tWeLy+uRpobpAWAW91C+LnA9eVDkJRfTddbII0FMXD6TvyikDT/fnONNV9cAGju6FGk5D4qOOzdserjTT1oXq97aRstdSe28Xrru2bgJSSfez3XPwu4fu8F8Xrz3F/rHqYuUXyot9fXXlwsVj13q+fEAj8WOOxdu1GD1TS3ejMXW2U52SIT4GIUVCN9oLm/5nqZO+PXSEwlwfVHzYuBu6N7NaWbFAgMwwCA/AUAQP8EaX2orB9cLVKEgbfWPzo4fD7VYrJ59JiSzQi67Z/0V+PWpmKi/22m49Xlid9GryKRLYSPD27MAnCvYBmLKiM63woc9hZeZJx5L/cw7nkBQ+0Ox0+mY9m2bZoVnEwT/dty7KfxN181QCw7xD4iepEqee9hvtuefTdwffkSgQfejRpJNYTdHownCJoA1yr0UAsPCP/pdtDG8DxbqGw9rxp5OUt9B/gRhllKgj+iOuJNPSDKiJ80lMGtbdk1TpwBJwfTsloDFUTZ6vO7IGbP3usftMbvT0Nwr3Gvh4YnMLqXpmOGiHngpPVb9qpLKp5mq6+rHjfrtNNtKUP+zcEv3NABi6shYPi3tI2XAMcnbavlg/DRWElGPeimRLROHni5EUX9JgTX3Jsonoi4HbOyBziueKflG2Hu+tYNDUL3Ks+eOwZ4CjEP/JSDe9VHnZ80zscdU8CWAx5eY3Zuu0bY4pdNjxuECL0M+NFavKCpR+Ch+kGy6lso1dJsheBY1jt9lSs5oiyZPeve6IICvR/4Omzq3kLletfwN04BWyE4StaENHn8EKhcB6EHs9UzBRKX6w3AYaTO3Dvuj0HQRx38EHB+jdm5BNwC1K9c7sGcIks2Bzz55xuAz70Q/JnrHdCeWvlQu2ucHKzNOW/xRHUwn30JPwa4oo6y4IZfMfcCF5807Rlv8QiddXWt3tsdkZdDLuQP/9SveRyF6BwKPnBKsu062RlyGa9fBNx1W2TDc8cAT2Sc7WH6TzcNrhiXHUnglYqz4mYNMRmIB+Nd6flN8Fjg6efAJTexvGs+ImysLGngqLPfGuzRxp3LXDf3ERaBy+/qoueMNK7H+ePkgldq1i333eHCY0MRjV6yXG8Prl953DvjBowxlguOar3Fgza9EY1oNoI7XXlXcNTWuZPyyMEl1zhp8GPW1+ESj0zi7uWudww+HRcctfUmBQ+4UWl8kyfcopPOJfNg9C03k1/U4smgUshzH4AUDQX3FgwczGSps+TJzsBg3euadS/vqshZl5lEb3bO4+oB7eQq6Mpv6vRPxwesq/PwFH+miP/Y4PoPFhYPaLAEtb+NDMtNdNJ8atMSwDWz4KvXO+NyxwKHSwbeWLC3T6SbLPCUIW/f8q5+51ELHtnvxVGKY4HjLsccxzm1JsFJ50g1jg8O6+pw7lLXxVvAd6lxYr2RAQUqa5DP1t5Vb697K/Y5k6s/mbPufoeCch0dnLY6PJLi9eivxsreB3zvk6i9s0c3aJSi8UsXlOvo4Mr8lIHf0Kgg8Duv6MZl7nROiEGjwnuXxuVOl7kjtBJT+gH6MxU0Gq5y/CuYmkfr4+zHCXvp6otGH32XF545IriiVtnTn+nTwcA5MnitYg3p4BPcunSc1ZsXxsSPAo5bHJWwc/brRlZTLzrJTNZeFb1zbMhtRTLuuMMs+oLOc0MNjvxqoCqXU+NF4NaQ+uqkq2FD7qFgTsJxwOGcTfBDmoX8CjZvAF6pPLESzVl4xs3KuCMPrMELqlO1EW1u1FMpD24eBF6rWQMSpcBNjsalntMy7tgjivoDNSY85p0aLXMfcLuVE4rfJQDMKZNxSMxg10V7gccDF0lPOGeTeJnDpJw7e9X41LeKr8l9K50uk3EsLuUuE9Vz9BFFuKUSps4kDOhblfLgqPgn1mHgFfuSGnLwF3VWg5/CaVNHAoeQOivNevBMTXZkxewB7gyNoSU6WTHN3Dv5NRP+7l06iWRBlsCk7MyjgEO9t9w+U/AG8RnQr11nD3C7BUDfFp2cdJ8y/n36mo5PZRyR7o161bvaLtmEu+NF4vBE/d52UQ08j4f86UmAqnAPdXauUPIM1InRtXaA1+w+c1b5mJbnucFi28ssgJEJjmfsuEimRhMzr6lOMUKTvQR4ZwZUY2xnT9pjQyEufhF4xdwYyXg3NiUR/d0yGZeTCQ57V244gk90CtKm5GR7D3ALiyhjk9Zq+CSONxlDpyAD0lmodIfb+ORaVJbgrhcbbpNDTg/64wvzzii4Fg7ygEhH7QS3sUJWwCQLhdoCiWj1nUJw7qsixUpHOMJ55J4XjazLTGQmTAycvOc5OcXkVRlws9LGFdPOnrQuWVzZWFmFxq59SYcd2njQQWuE4FpVO72CBQQHJnjnRuDh8iv6IOPWLAmOg8f4VfkZ98bcKLylgltLcGeYn9miQ+r6g5YEx9r9mhRIZsXrcfBwRuYDtSKMSWnwIakvcJJhs7ogKvBtoV1k08ZBx+0T4PUGGdCVKePo0HUKvB7Q0CMScCXBrRV1Mo3L9NTAziA+0xu0irSkRSOR8CJaDxaVywunjUkBh+vTSIhGC+68m8iOKQNuT1l+YGUnT+JOHtfGqMGnwGO5WzMq3O+DLDiSunyKqAxwpadpGfBGg0RESOjRKQVuTjib8ZQ8iQV+yjEYW3ngFYsJ93XAwRPl4k6UDPJwVCMJXvUeIY3AWaUCEXYXMDbVSpw0J+1MZBfQCSeibC0qLJSll61xZNZpC2mVToYUBODYQySBqL5dBtzyOTiYJbsxeiXZGAAejhZ3darWkOXuicCrdGhdStIXnhC86jJ1fmlXBMQpcOcknMSLzPyE6zYzRMEPY2AlMgizxVYuvqbnCcGr2kiXI+Pg/FQMniYvBO8Mo9nLSP/HTiI/RRwzB74pDFqZYyoOe54QPJq/8dqkP3ticCRLyAXGSuBypmu8H4ErarwZI2ddCI57xfnGFnR1RE6u6Xli8CadRCMhvaQfwJ9D6zypo8T84WwP/F/ox5oxeiV54KjWlbGT7UiYXCHkqQqJXDcprR3Jtxxw0tpx1awyLmcRuMICMuRkpwgcsw+dTIs32XyhdpC3oF1Oc0cGQw44Jaf9fA9w1ZiGMIU1rhDXzZ+kc8f9nJB7ghon9qx3I4Nc/+HlgGNy0iYv86bvC8GVdtg58vp4PKwG1HHSvalx8p6XAWeGvHcto6OzmRGizTEi2b4HuAqItiJNfbAbHOc/sBOChGg1hWo18aYV1QcZHR07gylwvkSck38TaTUGXuukwBVjTOMxpiXW4xF/+K7OW/GheWLJUK0mrHHc1XsyyF80cY0j7bEk3YlWYl6Nf0uBKyoFtyciy00RVzwYmNHbxcOKKhnaywVndfJ68px9YDxiJqqKnz/7j0zrSUCxcXZr2t4BnvgT4EVQ3Fc7AcRX++7lgWtyyEdCcDJP5IJ4qdDPRM5C8FkanBlwnVXaOysEx51kNmGOkXXCvdQccCTipLT2RSMHnAwn4qKdp4Pk3C2t+RlweI48b9MeGCXaeNqs+cZ8NZ/8CLdBRp1xz2okhfwuEDb12KwB5akiArc3oVsaHcA3q2ZNuzk1XjylEctGnC+dDQnp7IH0jjzY+NAWUvT5jZcDHjpFxkQEbk3VLLiibMzOpXIIOJLxE2IC2TRbqm4z4Pjg/ZChz+F3N602I9eNxV5Fg+fOZXwdfSipZn+SBXj79XF2ACSUQ4bQWexVDF4N7qU4az28Gk2811PAXJa+nQY3+YyWtB0+xRV+GLjSJaEce0UzwJOzBMINV0ggQ7SjSr/2cmqcz1LBA4qpkZSKLwRXzsMVl/uD43gfNmT6VDrOT4V9HJWr+SDHP4frQFzjjSpWa7gV+qkgsdVqi5o6PrxiIygWyrFmxBCAj65IqpMK2UoKR6n0VQq2NWPCHWuqGLjZoWGIPeXXzpPGmPgHSKkR9cjWU2SaekOONseJLAnNNnWNzIyiRdvE44lP/lHAsVrAz3iif8E76kNkRxu8Z3kR9xctBh73WQP6dplwpw7YuA2S4hwYeLeckptj0J11RH2FDeXg8XNCPtLE4Jomq8rjXSo1olgPSPBDNdjkjwqzzsICA6PdHQyGw+HAb1OeIj2OLmjPyNUn53hzmZR0pEEsPpQ6d0XCDZXLvZc4vsTtuOz4Et33IXS5ndZ55IcA43zYMi2eppc+SNEkwA0wW23Cq/nmMtE17CFUXapkOYugxvEiUXng6EEjL+b3R1sXag+QW+6kqQ8j40wx/JZlxSZ+m7Y1+dbOGPIMHLS/TRw7FnNDr2zsG7FOQsaqa7VOl/ylX3lCcK3akzg1Cu/08OIJwIlTRJ4zIbGGTeSHAH8abTkQho4tu6+Ka7xvW5nAju1MZyC6ZkLyw2uY8J10insGXJtDmeA4DPAiAkediqhO5ks4Xd6awaAjniFn4TG0DLi6Ec+JNDsssKFwj9CckreLR7yaGXWGwJcSwWlB4XyUDHUy4U6D+iyQTOfj4jvU3LF/a5UQ3LSp91MTRKJD55zN80PdnLSDPhEkyI8SgHtVmTUevYA7V0vVOOKn0yZoWKZir5h3JgxWsGqcZrs6s1FEUWtnxro6WFE7ZkbY4Eigztzr3hHAVbqHUyY880CnTQDis1SeuDRuZ1fzsD/tcVa5gUvRZFA6FME7EHVRKx3inJPhj7Tlpm1hWhHKAcc7Wz43yZZtsWEWbC+pZC4gLqnVZY81LjumMNlONwOO+jDeME6UOmNmFildOkWQLuLRn4NUjXveVU9PZysLHD+xt31wvQYd1UEHFwe2CWnLZGFRXo3D25YorboZ7xyr/vOV8OrbIQfnAd4N7U9491imbTTNC4LRRS8zxV8iOBHy+vz+bvHiem5Qf1j8DHsqHRg2w8V0yAYjuz0aJLEjNk0VATgmi10THQAHVwHRHiwsAe9d7eXu+gHve+5VF3fbOcwu6pDBnbS4FfK9gV6vTTbZZz/yKXGm2ElJZFDGSUnfqai05zPyB8270XWIi4G/dQAFu6zISMISKokfFUDJa9Ysr1IP8s4iS5gpC6LO8W5NXmSqCe+UmIqrhpLjUJGoG5dhE2Yb/srHa3Gdq/rC43ON8zKQmHaUkBnVFXNSUHxRBuXAsU6jswamIFnlhRnISLtKiMlrsYiJsPiCDMqe9JmRh+tcJ738g4BzrRa5zzukWsFJEbjRZ3a9uQE6EuxNsexJiWIJaXfx8aoGWrQJyJzcC1x4EoThrg3o4f1Pi5bcvyk4WaRA9Q7xn+XWeGjA4YXY2DFffBxwxciM65e9swx4bKnT2aMb7uFybPDCFd78VyOaEjeR3dQVFnXFudcqL83k4rwjggvLki4hiMaXHF94yyt0neKHOzKd/SFeeZ2+85W0sbSz+NGUOHucN74ivjO/+PxghBPuzv6h1b157jjNe4C3Y+NLZntvtuKT4W4ttX9q9dP7gl1PU53k9WknOPRj40vW4NBhYnHuZP48Af+rGm5esztbGWl3gwUnsdUXZmaFwqvAwxWQtUqj3gwGeYPQ7wIeLkZi6y994YasB4IrXbZpSa3eaGr/yp9hIx08R6sl/gTD+LITe1Uo4/YEN+gUy9rZHwj8N4u97spWYiouPllhG4WX7XwZt38/oLPhKfh/zsxb8C7geUqJhmTCKCsZ+9pDnRWdZM3p7I8mBqcbTQgyEGYrIe0qISA74oXh5ZiX/lpwlnUNg//jDP2LLv36KOB0GVYsrm4NQHm2wuKT7VpqFSzcCHitc17yThlpd/G7VnJAwdxkh5DySlh4DQ3k/9UIwcma3o8Djse84uCVmjMDpe6MnRReg4etzn43iXDjM51BqVcmI+0uvtFPr1ijO968Glw1Wia21ZvaPxk49oLfClzZXfxwnkxiJPCVepwcfKf2Bwb/fRZ1JGP3nTJTcb1N0uAkSJq85hBwo/W7Wa1X63/VYrm3y9wpLRU/oCvYFYNvXfgqcP9/tGpd+3ctDk62LfgQ4OEEoeQQMBXv5cBzTurLFw0Jt/+cxcHx3IFy2R4bHM8Fyu4Og9XPYEcJd7xP2Ls61ZrNP/46S75W89YopSXfAJzMvhbN9tjFVpQt/cRYtU4qPJmtFZbrvcFxNxeBW31QcGchOITrkatp1X9TyzCZuzUrcAWPIdxzwUE/Z42i1T0MnH5OT9Pqv88E4HTU8iOA41EGIXi480thBhDC5F5X5BOKmub+7/+d5UwbmuwEl9niCx7Qzc7hI0eq2YqrRu8t14/xTc50eP8Q4O9B3/tnlbxsM6b7+4DzvZNEC7dM/kmBHHD1ynNdN3j4zvbE1nsX1YB8D1nRJxm7kGeLmvtHACezMnPAK/ZYuKiD3zl/8cgUO+30QsfNfHnnec2GO9qq0OgLdw2kh6dioSuPvBh8JjDgQmedWnJ5dTIKVxMjdDLtSmsGD/dIpQG/AJzPtXxfcB6IEoPXyKZvOXfCm9gy6mDhIbHmuXff6XSfTf6OkHiGVK7oPII+zym+suObFHbLUHLuVOKrnOv4y9Ej/gll+lGXPHBReOIY4IkcM4ankd1kIjXDty8Oz5DdWhLgd48KW4ACBp1C8ArSl8XmwfHB6Zz+AvAK9a0EJcQTtWPgWk8Pp+t2i7ZpSQzYvh84dlaKwWtkvyhBBqjOYysAyWaa7GntSe62z/xotkRrXuUbcrngbNlgIXjF3KjCrt6LrwAMZzuhtt7K3Z8m+pMY7+8HXvILBeG+cMkSki3IUrt1KOJvdWXAhSH9twQfFm9WGfoYt6JIrDJ3w9XE0YcI6Vz3XeBYchq55ZJGLuRX46syc8FZh8WfCcuWEK7DDxEuQvPgMrtphQicb6Z5TPBEjomWBaZFX/41bcsxN0wAhl9IS2Skfx8FHkruFX9MCG5vKh3LLtoUnuwW+j7gxqXQSTNt20LMT9PLYbcdXmO1FMHEHuSRPt9dXcz5QlIwdngjMdTu8HL6ZDqWjRc8iHTG2Mjp4/K7euLNguGfVirhJRmT1ng1nJHFmLiaDb6hoz09F00igTrU+Zpp2G6xPk4/nYizaPuz4Wrc2uCFIKmnOX/2wXuAK8oJTgOa8D99v9vGmg4vRQjbNtnBtEI/zeAbQpnBcwfdJ6bOsDLgv0K8ugFJiXb73PdnySeevA+4SuokTDCkTReixTfIdPog38cC0YZo9lQVKxT8kHgSPOwtwAvt5tgBKrd8Eo21yd1dw+hOuZNitXLA854pOiklvQ5cwYvsHCabTWd1LlqWb5yvLC7HnXG5bI8u3Hja/7VHJ41++Mk521p1jeTwEDC6KyuMaHUuy42PfwpwVKczm6t+xL4ZdhW6hAv/vzucWuEgtGllZn0dAH6MFn8YeKIb46XlzqTVHw4Hw2G/tYkvUrc2Ar/uU4PjQ78T/0IB087URuFWmWBfpc8KHi8hqvbiz3E506zk/zuAY419snEE31OlVr41GYBdLvcnBUcHAAYbxxaA285moEhd3SgxHV6I+J/A8C+fHCt0QHCPt6zKyjeEW298WPBDrBvU6P1vtxOb+R/25LbvKzmbDhVmW6JcMpI0cFLxwFDb3RlyO2bIxzFyd5n524GH/OJdkj45+CvfioyTMtIXePIBh578PODFI4qHgxdmcDj43ni70iHgZa45UnPYFy8/fZYaf0/wfdrkkZr68WXc4WyHnyz/Vr7SV/pKX+krfaWv9JW+0lf626T/ByBj7U4db49yAAAAAElFTkSuQmCC" type="image/x-icon">
</head>

<body>
    <header class="main-header">
        <h1>Customer Service API</h1>
        <small class="text-danger">Selamat datang di Customer App sebagai penyedia API</small>
    </header>

    <main class="container">
        <!-- row bagian bawah -->
        <div class="row">
            <div class="col">
                <section class="card">
                    <img src="images/money-transfer.svg" alt="" />
                    <div>
                        <h3 class="text-danger">Transaksi</h3>
                        <p style="text-align:justify;">
                            Transaksi adalah suatu kegiatan yang dilakukan oleh pihak organisasi maupun individu yang mampu melahirkan perubahan atas harta atau finansial yang dimilikinya.
                        </p>
                        <a href="api/transaksi" class="btn btn-danger">Get API</a>
                        <a href="{{route('transaksi')}}" class="btn btn-danger">CRUD Action</a>
                    </div>
                </section>
            </div>
            <div class="col">
                <section class="card">
                    <img src="images/rating.svg" alt="" />
                    <div>
                        <h3 style='color: #6610f2;'>Konsumen</h3>
                        <p style="text-align:justify;">
                            Konsumen adalah setiap orang pemakai barang atau jasa yang tersedia dalam masyarakat, baik bagi kepentingan diri sendiri, keluarga, orang lain, maupun makhluk hidup lain dan tidak untuk diperdagangkan.
                        </p>
                        <a href="api/customer" class="btn" style="background-color:#6610f2;">Get API</a>
                        <a href="{{route('customer')}}" class="btn" style="background-color:#6610f2;">CRUD Action</a>
                    </div>
                </section>
            </div>
            <div class="col">
                <section class="card">
                    <img src="images/review.svg" alt="" />
                    <div>
                        <h3 style='color: #fd7e14;'>Komplain</h3>
                        <p style="text-align:justify;">
                            Komplain adalah sesuatu yang diungkapkan yang keluar karena perasaan kesusahan. Perasaan kesusahan yang dimaksud dalam pengertian tersebut merupakan perasaan ketidakpuasan yang dipicu atas pembelian terhadap suatu barang atau jasa.
                        </p>
                        <a href="api/komplain" class="btn" style="background-color:#fd7e14;">Get API</a>
                        <a href="{{route('komplain')}}" class="btn" style="background-color:#fd7e14;">CRUD Action</a>
                    </div>
                </section>
            </div>
        </div>

        <!-- row bagian bawah -->
        <div class="row">
            <div class="col">
                <section class="card">
                    <img src="images/employee.svg" alt="" />
                    <div>
                        <h3 class="text-success">Pegawai</h3>
                        <p style="text-align:justify;">
                            Pegawai adalah orang bekerja dengan menjual jasa seperti tenaga dan pikiran yang berhak memperoleh gaji sesuai perjanjian.
                        </p>
                        <a href="api/pegawai" class="btn btn-success">Get API</a>
                        <a href="{{route('pegawai')}}" class="btn btn-success">CRUD Action</a>
                    </div>
                </section>
            </div>
            <div class="col">
                <section class="card">
                    <img src="images/trolley.svg" width="200" alt="" />
                    <div>
                        <h3 class="text-warning">Barang</h3>
                        <p style="text-align:justify;">
                            Barang atau komoditas dalam pengertian ekonomi adalah suatu objek fisik yang dapat dilihat dan disimpan atau jasa yang memiliki nilai.
                        </p>
                        <a href="api/barang" class="btn btn-warning">Get API</a>
                        <a href="{{route('barang')}}" class="btn btn-warning">CRUD Action</a>
                    </div>
                </section>
            </div>
            <div class="col">
                <section class="card">
                    <img src="images/delivery-truck.svg" alt="" />
                    <div>
                        <h3 class="text-primary">Pengiriman</h3>
                        <p style="text-align:justify;">
                            Pengiriman adalah kegiatan mendistribusikan produk barang dan jasa produsen kepada konsumen</p>
                        <a href="api/pengiriman" class="btn btn-primary">Get API</a>
                        <a href="{{route('pengiriman')}}" class="btn btn-primary">CRUD Action</a>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <p class="text-secondary" style="text-align:center;">Author by Difgam</p>
</body>

</html>