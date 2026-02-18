<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{asset('public')}}/CLREnergy/dist/favicon.ico">
    <title>{{env('APP_NAME')}}</title>
    <link href="{{asset('public')}}/CLREnergy/dist/css/chunk-vendors.a9285ddb.css" rel="stylesheet">
    <link href="{{asset('public')}}/CLREnergy/dist/css/app.865ef51f.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/870.1e90e4e9.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/808.df13f558.css">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body class="">
<div id="app" data-v-app="">
    <div>
        <div class="taskbox" data-v-3345f269="">
            <div class="van-nav-bar van-hairline--bottom navboxi" data-v-3345f269="">
                <div class="van-nav-bar__content">
                    <div class="van-nav-bar__left van-haptics-feedback" onclick="window.location.href='{{route('dashboard')}}'"><i
                            class="van-badge__wrapper van-icon van-icon-arrow-left van-nav-bar__arrow"><!----><!---->
                            <!----></i><!---->
                    </div>
                    <div class="van-nav-bar__title van-ellipsis">Rewards Center</div>
                    <div class="rightimg" data-v-61186c26="" onclick="window.location.href='{{route('reword.history')}}'"><img style="width: 25px;margin-right: 12px;" src="{{asset('public')}}/aaa.png" alt="" data-v-61186c26=""></div>
                </div>
            </div>
            <img class="imgtaskio" src="{{asset('public')}}/CLREnergy/dist/img/1.166a5a2a.png" alt="" data-v-3345f269="">
            <p class="friends" data-v-3345f269="">Invite friends</p>
            <p class="cashi" data-v-3345f269="">Complete tasks and get cash rewards</p>
            <section class="section-box" data-v-3345f269="">
                <div class="boxi" data-v-3345f269="">
                    <div class="left" data-v-3345f269=""><p class="titcode" data-v-3345f269="">Invite code</p>
                        <div class="boxcopy" data-v-3345f269=""><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAAAXNSR0IArs4c6QAACwtJREFUeF7tXXl0lNUV/71vspCFhBAIyL5EAmFfWsgkAQUSIRmUllqhoEWqFisKKks9sqQee5RFjkApKYtQKhVKVZAkrAHNJDMaokAFZE0AITtZyJ7JfK/nfSEbmcl820wgZ95fOTP3d999v7z1vvvuELRi0aZEBvBUM5rjNUMpoQNASV8Q2pWAdKKANwHcmHkUqCZAKQXNB0gWQG8QSq7wnPlHjpi/N4Qey22tZhBHVjw6bZqne5U5gvJkKiiZCEIDCYgiGygoBSXXQOhJwtHDVe6a49+POVTuqHYpMl6UkTHgtBG6yeDxIgAdAG9ROPlCpQDiwGGn4XjcCcSAl6/KNtJuBAafesK7g4vnPIBbCKCfbVPsIpEO8BuKaso/ufjk14xY1YvqBIYYnvUAX7GA8FgKgk6qWyxHIUU+5bAGnMffjNr9FXJUWMOoSuDYpOiZGkJWA+ilppEq6rplpnTZd+Pj96qlUxUCtSlRvSmviSWgU9QyzJ56KMgRwpnnG0ITbiqtRzGB45J1swmlmwmIr1JjHImnoMWUkNe+DYvbo6Re2QQGJkx1D2iv2QTgZSUGPATYbbkl5tevRR2ukmOLLALDk6Z2NnOag6AIkVPpQ4chMGp48zP68YfzpNommcBf6KP7uQLHANJfamUPtzy9bgIiT4fHp0uxUxKBoclTgih1SQTQXUolj5DsHUJqJqWEHbks1mbRBNb2PJLUhsmr4+yOCXS82J4oikBhziOcse0NW2v9jF7XUD5EzJxok0BhtfXRnGozC4b4sWnMvWd+0tbqbJNArV63tQ1sVcTS9qDcNkN43CstgVskkG2SOYpP5dbeFnA8wZyWNttWCaw9npFzj9oJQ+1/GjuxEI4Ot3bss0pgiH7a4UflbKs2aQ/qY2dnY/ihqZbqsUjgfa/KZ/Y27FHSb6Z0liUvTjMCmT+PmCsuOdolNdJnCCIDnsAwn2A85h4AjmhQaCrEpdJr+DrfiJP5ephoTWtyfotqPAY+6E9sTmCybgmhWOMoS3u264ZlgQswssPQFqvMrszFR9djYSg87SjTmtVDCZYaw+LWNv6iCYGCG17jneEoT/Io32H4cNC78HLxFEUKpRTbb+3Brp/3iZJXXYgiv8hc2rfx9UATArV63RsANqhesQWFgZ59ETt8DTw07SRXt/56LD7PipeMUwmw0BAet7FOVwOBMeBCJuquEYK+KlVkVY2GaLBrxAb08+otqyoTb8ILZ17HrYo7svBKQJQiw3gyLrDutq+ewJCk6KcIIUeUKBeLjQqYhHcHLBIrblEuMU+PlZcdNlU3tYHDU4bQuGPsw3oCtXod27bMVNQqkeAtQ1djmG+wSGnLYia+BtNSn0dJjV1uK23ZttcQHjernkAhYqCC5jjg0hvtOHccC9kHNoyVlj9ffB/6gu+UqpGDL63yIF1YBITQA7UpUc+A5w7I0SQV09+zD3aPYlcpysvfM3Ziz50vlCuSo4HjpxtCEw4KBIboo2MJyB/l6JGKGdw+CFuHr5MKsyi/4+a/8cnPrXNgoqD/MIbHz68lMEl3hRA8rkqrbCjp5dEDn43eokpVG9K34T+ZX6miS6oSSnHVOD5uAGEhZpR3zVYaJSXWABfigqPj9qKdxl0sxKrcwh+XI634nGI9chSwqDDCmbqScclTp3JUkyBHiVzM6kHLEeY/Vi5cwJXWlGFa6guo5qsV6VEC5ok5imiTdCwIiMWzOKyM7TAS64e8p6i+fXcOYGPGDkU6FIMplpEQffR2AvIHxcokKlgbvArajmMkomrFC6uLMfuHV1FcUyILrxaIgu4gIUm6REIwUS2lYvX4uXYQVuNu7bqIhQhybAO9+EJMq819jY2lFCdZD7xAQJQdCyRR0CDc1T0A64JXoa+XuGi4sppyxFxeC0Nhmswa1YVR0ItEq9exE0iAuqrFa2Mnk3m9ZmHGYzqrKzNzYyUXpGJjxnZkVmaLV25/yVwSoteVEUCcQ86OBvm4eGOCv1bwSLOeqSEcCkxFuFRyDUkFxlbxvNhqLgXKWQ80AXCxJez83iIDNQ8NgZ1cO6KnRzf4u3WsH8rl5grkVd3FzYrbuNfKK66VDlTTakOYzX1hHcci3H8sRvkORUc3P6udnM2BmZU5SCs+i2/yjThddBa8fV8viBpwdUPYoYtIJ7eO+F33XyO6y2R4u3iJMvRBoezKPOzP/ApfZh9GFS8rsFRWvc1ABDkO28a4Elc83+M3mNNjBtxVOAezxuRW5ePj9K345q5RHUIkahG2MY7YSPfz7IWYoKXoL/MOpKV2mSmPX6XOxV1TocTmKxenQKLdj3JsnlsV9DY8NR7KLbagIbMiG3POvIaqVnAqCEc5ezoTIjtPwPIBb6rivrfE/k8lV7Ds4vtC7+vs5g8/V19cLcsAZe877xcvjSd6e/ZEetkNVKo9XzJngr3cWVq/MfggeDlcVLj7sETe/+5dxJvnVwqk9GzXHf8ctRFuxBVXy9Lx1oVVKDQVI1zo/Yvhxrkivewm5p5lz/bUK7XuLDs4VHt5dMf24etFRxxIbVJG+S3MP7cUpeYyARrRaQJ+2/1pvH0hBov6vSz0xs03duKjwTHYmL4dZ4rP48tf7kSk8TmUmdV5CVvvUGUGqOnSZ7dt24atQ1D7QKm8iJJnc91LZ99CennDK60Orr7CRf2BrMPYn3VImDbG+Y3Ce5fXI6sqB6/2nitsxFdcVs/tWe/SFwhU8VJpVrfpWNDPfu7F2Bu78a/b+wWy2fUA20/6u/qhs7u/8DcBwe2KLJwv+QlRXSYLcjlVeYjPOYEKcyWO5p5SZcVucqmk1rVmexdv/HfMdtkbZFtdMKcyD7N+mF+/4v6pz1zM7jGjGexg9hGkFp7BXwe90+y7q6Xp6syFja811bpYf7HnTLzUe7YtHmR/vyl9B/ZmNlxfszlunN9oSQSyY2FYytOybbgPbHqxzj5UI7Rj98hN6O/VR6lxFvHVvAnTU3/fxI0/wmewxTM08xkWVBdhqM8gi7oS8/VKbWwa2iEQmKKLBI+jSjSf0n4hbBnsUdKKzmLh+RVNVEcHTLYY4XX+3iWwlXpa10iLpmxSehllKbgILDnEJN1VJfkN2H2vXAeBLdK3ZOzCp3c+byL24aDlgjfnwcLmwJSCVKwJXmlRbWjyNFvVtfR9uiEx7vFm4W21wzjqDYCTHWC5eegHGOE7RIlxVrGLzq8Q3FiNS+sQyC80hCdYCLAEoDTEVxcQgXcGsCBX9ctzaa/gdmVW6xJoK8SXWReiIMicbaJZL7Q2eSuhNerb2SiuudeqBNoMMhcIVPjMwdfFB2uCV2CIz0AlfDXDTjHOQom5aTBlTNBiRHSeIGkOZJvpycZn5dgm7pkD06z0oQ0HDrouEcLJINCrD9w5ZYFELICIzYEPlkCvvvhL0BIwL3fjkpCTCGNhGmKCljT5nMXRsCj/uJzjkgkU/dCmTrPzqVcDx5KfegkrsvOxocCg8Niwmg43TLKcY8b53NXGYJb93LVOr/PBtYIH14xE55P/lhPy2Hzyz0h0Jp2wPs5FEcjgzrQnlkkUTaCwyT4VOZC4uJ1ow7lj7Jd4p45/Z+qnpj1RUg+sgzqTjzWQKIvA+tXZmf6u4bWm5MPhfYAzAaNc5hrhnClAVSCxkRfHmYRWCZ/ONMhK2GuErU3E7T2PUixyRB4GS2az/AaE4OOimtJHJxF3s4YIySyiIwghcx2ZCp5Sust4Mv74I5sK3lKPcP4YgUrDu95VJufnMCjJBqEZD8vPYfwfoL60R7VkRRsAAAAASUVORK5CYII="
                                alt="" data-v-3345f269="">
                            <div class="btncopy" data-v-3345f269=""><p data-v-3345f269="">{{auth()->user()->ref_id}}</p>
                                <button data-v-3345f269="" onclick="copyLink('{{auth()->user()->ref_id}}')">Copy</button>
                            </div>
                        </div>
                    </div>
                    <div class="left" data-v-3345f269=""><p class="titcode" data-v-3345f269="">Invite link</p>
                        <div class="boxcopy" data-v-3345f269=""><img
                                src="data:image/png;base64,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"
                                alt="" data-v-3345f269="">
                            <div class="btncopy" data-v-3345f269=""><p class="ellipsis-1" data-v-3345f269="">
                                    {{url('register').'?improverCode='.auth()->user()->ref_id}}</p>
                                <button data-v-3345f269="" onclick="copyLink('{{url('register').'?improverCode='.auth()->user()->ref_id}}')"> Copy</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="invitei" data-v-3345f269="">
                    <div class="peoplei" data-v-3345f269=""><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAA8CAYAAAAt3km7AAAAAXNSR0IArs4c6QAAEX9JREFUaEPFmgmQXVWZx3/fufet6TWLCQESYoAgIBCiBsSETQWiYSeiMowyM4oIjgpISoXqBjVoRNwtmcJxHBkKUDaNIaIhGCAJENkjJAQTkkCSTnpNuvst95ypc5fX972+r7tFq7xVXe/1u+ee7/uf7/8t5ztX+CdexiD0tn8MLZdhzLFAAUf+jDGP4agHpfH6v7xV9eStPvj3Pmf+2palRd1JsXAuu7eDV4JJB0FuXDC1YBALku/Tsv1OkdtKf4vMfx6w3V/5Gc+v+STPPQ6FQqCz48Kck+HY9w5hsBqKbMTwJZl44wNjBfdPAWaeOvcsnn9ymdn1hlCrgQGOOQGxAO336LLjFPeQLV4uzbd2jgbwLQMzb7TlGUeWJrpF2vRogqL7BsR8S54ynpkTCY/rb8cpYQMfufJhXPdzlpBVc4u8huZsmX7rSyPJ/JuBma624xC1BDgVQxrYjuI29uvvyNS2/tEAmm8wVyvW+IEj4VKwVTQnyld407x25Y8w+ophw5TsxdNnyKE/WV9P3t8EzHTd+EUwS0JA8PpGeG0DFAuQy26gY9s58u8dr44ErnQzt4rh83XGeI5hnnyZNfa+2XRVBgafxdNHJIDbTWnwJDnql4nyxgTMmDZFj/oR2lyOMeB58Oj9sOkFG738y9JJhJ0Ip8l11A3T5Zt5VRtmxl0nel4JP3cX88k4CPPypZdRMrcnLoTiOdJ75sphy8PoU+2So7EH09X+Q7T5LFqD0fDEQ7DhaUxsWWJ+slW5vEeuZXftxAM3McNx2ewH85pLQGvhmMxiqnzHPH3+AaRS29FGJSrqcL0cc/fXEuYbGZfZc8NVYL6H54kPbOdWzEN3VqwUCwqViZTwx1+t54xF9+DFZy9/i4s8j7ujRbDoou9KeDK9mLm12pgnLsqRKnZiyNaxWhfl4iFywvLe+P0RqWh2XvdOUOvQXs4HhTa8tPZKnnnibG04Ix7Nar87wrXOYr4dF1a6mSWeYXFEvfg9V/haajHXDwP2yClTyOV2DLOYz/1wtMjFcuLyu8YEzI9aO699lLKeh/bwfQv9ihzyA9+Ry0v4OPATA41JVgP6tWF29stsjO4PLuFBAwvjOlV8zbAw+2V+OwzYo6d+DLhjRF4puUXmrbxmbMB2/OfZeNyPpyUApm0G+rnM/GnFuc0S3l2G5QYm1FohDCbLM4tZEAkcWMIrGg6vzV9KQEocmr3e97/KZXMeK9/7GNrESpHKUgwRWXGrnLbmi2MDtuWzqynr9/mALDBLReEmOeJnN9TQ633G8LCBbC0dRTAuLHQXs8y04RYy7PWgqXb1leANwITxi+mpArb8+EsQ/reqAql9OKhIzpcP/vm+UYGZzZ8+DG1epuypCrDAYt+Vo+/4Qu3cxW/yOa35XpLPKeGlzNs5tncDzaksHdowLLqJMJAfZLy0MVih9QOzZuE4azG0jELDx1nw0nwRqqqfxOBhXrnsasret4PwHlrLB6ZXy3G/mj/MD9pQpSyrPcN7I3BxkK7wcaN4ytNs1LX1U1BC7c/vYIL8AD8fmV9PPwClVmE4vLpgtHfjRJYepDxHzttWReH4qCpdzUuX3EupfF5grZCK9rvRHqZ8jJywfEMtuNJSTiyXeUxbYsTCuC9E+IvWfMYIq5JWX4RCQ2CxfnN36zTEXYGRIyoUTCqUBQ/FhXLh7vsT50z60Txz0bN43rHDLGZ9Db2aUvk0OXVVufbZwSUsL8OZFTrFBgj8woNLk+QpwehBJjYdykxU5n4MU0ekn92rKXWdXDywtN64ZCo+dfZmPP32SjSsWC2ipfdLXi1cJp9eX7X5G/wmHyhrfp9ER1uIGXDqWIxsM99I5/kChtyIoOxNxdflUr460rhkYGvPfJaSd2xVRPR9LQz7vuW8Ryj1/4ss3LgjEnD3RTgL5rBJG2bU0tGCTXAv/9FMDrLjQu9Jol0kQCgjLJZ/45bRwFdNY77f1oSTOp+mXV+F8swgKZswOdtP+6/NLgVwN4Ha2k3xjVVoGtBuWRfnd3vveNu7TXbfTOtYIsH0lRJKghnjl+OA0yuwIWUQD6RXjOwQ0psRFSOEaTCmMHejlE5ZG8SPqCCTHrReT6e+V9ra9g2tQfjN3NJ2CWJuBTNx2M61MroMTU9Dzm6D9oMu+VYsdx2Kt3c+mEbUBzzUdAeVcRCbeSsKRMpEUGOV4nYXHslg0OhyGV0ooUt9qOZ1uJNfRMQBcTD2c/Aw9J75KGkApfC34IGYXWiukqtvvKciyXxz8ZV+0yRooQy/7IOp/XDgSnA7w4RdBlNkYONMCltn+dZxshlSC1ycw9I4ORdRyQX5MAHbHVhpgRlM2UOXS+hCEa9QQJo2kT3iOR8YogKA5QbKG09GqfGolDsEDtEIn5Lrltwupu3qI1DyDMYkV89Wi1QBZq0Gty8EZf2tTGFrI71PzEA5DqnGBtJNjbgLFWqaIK5j2VhjsThRYiu4zQILxJuQ/kZrjOehC4Oot6/DmdQRArPgBL2vieL6OaQamlDpFBLlfZH96PLRYq6/6ntoPjeiMx71AjTvDpN1EESMp9l794GYwRzpxgayrS2k8jlkgYcc4JdfMedK+B73bgvsj5kaFQLgxmhMbhfqqCergFnrDa6fArun+wuqXHcoeSu5WcyXLn8BzNF1gU3ohdkvB0WwXzMGf4UtKXqXteLm8+TGt/rgfCudWQQLrOqK6vnauj78f5tKADY0gZEScuKjfoni539LBaXwulL0P3gA2UkTfT3EUtW/ZK2Yz19mTTGpLrATtsGknqACicor7dG3Kk3xuTzp5iYfmJNJB1HQAptStb8ckQz+Tetjf7B9oeTL7tRl/pOQslHTAgvAGSX0/leeTHYS6ZaW0Gp+qfNXMVd8vAMhjIR2hjCsWxlZDWdvtzkrBioA2HOnQu/IkpvQSsa3lqUCAbBaKkYRKQz/QdCP1XyWin+wVAz9Lk7jyE0/+CKkLcWtjkNW671D43S1kJ0wwV/ccN4tYv5jUYcf4pOumUWYZ60VK4RDy3X92EP6suTHt5AaN24otJ9ZSKDiKEbzgaVig2qQWYaduwkcCyoGTIS+uwqwJUtu4kTcXC68L1vE/Ou5HcBwYHbx5hfh6CBX1VYhXd/px+nPkm9tGZrQqnZW5GM1Vhkpn72uRqQiTWU4580YqNBiIvT+ohc2uz6wVD4fWBO2iPnoggRgISUuFpgaVvjxDafx6Pp2N25PhnxLM042HQi1yltgU62PVSqDqDkX+6yxoAX2cK3FojEGLHNO2xco7W+3wyCihO7v7kLtdMm1TiA1zgLz9dgi5sLTOzCSTMXP52CcCQNHbCdtND3f70BtV+Sbm3AymXBCYEE8KiZFwwRL2qj4+/rBg9Msc2zgiNNQ+d3vzqs3kyJLrnU8KZ+K1mJmi5iFJz8C5pRhXmDvt00EFe3HLMDQ17Rm3//swvy5RL6psRrYh2IW8+tKKycse6Kg4ccNG6TC37eOAuxyoDnyryFwpdcG6PnaZjINjeSbW3CyNsn7cy4Tc/bcyZTUpxAa6e2eR3Fwjg8y78IPj0v5ClR8LNp4agbu265L9+zQ+XzOuOlUxG2YVRKO1EKrrq7Tk1pTVs5eZdjgGDa5YTiu2iHDQRm4ZkqqNmhYy/T9eKMu/3GXzuYzJtvcuk5aJ65BpJuB0m3V1f2M9FIDQRurJYvc+aEwaIQd4GhfpjXFNbvYf8NT5DKQTtmCN7bVOqmMzBrbAYzZoGBtmCqSgud505BFM8KkPORbRhSdl65C3tyHdfG0y02pbVQaTcOA6QhYaxZ11znBNmWYxTx05wBdF67wJ82kHJQFFs4m7ysjR4wR2IsKUw+YbW5+/V3I4c1DuSv0M+MZOs78LSnbIs5YHVS7s0W3RWtTBcybkV4aAZOmDM69FwS+EPXsYz5mtxhdlzyM+2Yf2bTyC+Gw6kXNK6MiYLXBMUq4oZvpFxV6TR2LNaRwbj8ZcYfCe0RJb2+BPef+jnQGcmkh7coIwKanl3oSUjHrklq2KAiv1mqVxs5Q+O9duh7vt5vJZgTXWizcpjgnl1HvGJvF9AsK7/FkYOqkKTjXHhcl3Sqrlbb00fmxFWSykEkLKcdpT20pJ1usFAcGpFdcjGQCoV73IIMrt5J+5wTcaY3+xm3wT9vYt3g12aw/cQWYe4rGObI2l8XyUizHec8ryo8l7NsMuFccjXPW9HDeoPANLCYUX+6i8xMrsJkmk1a4jmrP1ANWmJ5eqiOLGUP61xegJuYZXLWV7hufQO8d8FVSE7Kkj5+Me3grA7c9iw2K6ZSL8ms4cE8F98h6HY7qCFF+XiivTogaVv5PT0cd3JhgMUXxpT10fvIhn4oWWEpUe+b1OhYbtBaLgoeB9K3vZ/A3G+l74FWfjY4KDvYtO23j07LTXrb+TVlgPhWF1OmQOiqpT1Rb3ULpOUPp0eGLIC1ZsneeFdSgUdFb+RQf2N5Ll1WAKVHt4+oB668BRkoo9RcploIDYwvAcVSw5TcG7fuefR1DfFD+fkggc7pL6uhaYMNB2UUpPWsoPDqsRYkzZwq5m+cl+pd9rvjyXvZ89EEfWDrt4IrUB7bPUjGymI2H2uBpD601yirvOP5n/LJb+agbFWZ9Mu9PkX6n9c24JeLPDf1efMajsGr4uympC2aRvWL2ELBKYyiQXtrcze4L7iVtc1hG4Yhqb6xnsd6DYz4WVT0x5YYAJGXSod9yH8yEwEYeZ+8WnikxuLI4bGD2s8eTWfQOv+qyQar3v1+k4fzDyC+YiTiK8ht97FxwDykLLO3gKKe9+fViclTsPji91AjXBOtpG1smaCPGck+lR5jY0gieyZ2RI3NMvFqvD7Cwvkj/SnvIEjwbXdlPzcY96UB6bllH/+qgJ2uZnprRTOOnZ5N5z1TeOOX/SGWsfzs4jtPeWg9Y58EZH9jo6zzyiPyZObLHjlCtxx4fXF+g/w+V06PKHRnnUt4/SGnA8wsf69Y2o9hV9g9+Dmmh9Gq3H8xSqSDct9ajogXmJ+h6kXq0zlOoVsOCPNnjartOtYsRVMUDTxfY//vYey8VGcY/3PHKnq+OcmyAClp61q+1p9Ha+reN1JaK0j6hHrC9FlgseLxVyzV8qIHc7NGABbMPPDXIvhX7E0TZ9qkO+4xBuzz+4pXfXPUP/C1FBWVU+6TtdXys4x8ErPHDjeRn1++/xlH0PzlA34pKy/0trGUYEQztk+sB2+UDkxF9LDloV+vTvLCR/PGjnwbZp/av66f3oWRgY5EVSRaj2w+oB+zNgzKxPDaSQ0XTxbf+Ueg0NJ/TzLjj82Na/X3r9tP7O/vuSZK8JGh19NKm/cA36lBxRxWwMemVqFDLOS00vGuMwNbup3tZ1csCowiuD+zgesC2HZQZ2kHXnX50grSe20rDuyqvwNY/8QP61uyje1l3HWmjWWzoMdGmvS6w16dmlmoZ2cfGYsfx57fS+O6G2NCkhkfwW+8TfXT9ph6wsUgLxlgfm17PYlunpm/QotrHPl3yyPEXjKfpPZU3kcJT0NqiOIhmvY/30flg198rEgdzzbQdhcoRbpW0zQdmPizIb8a2k6qvy8QLJtA0NwZsBLV7Hu9l7wOjvuI7IvCwxXPaITsGH6lEyfgTdgv22oGZTdrItKHDiQRn9X+KOjfxojHooE1aNInmucPeLEpUrnt1D3vu3xs7DEmSZ8uN8HH/dkjt8ABFCZte31E48lSo7H+G7QZfmZJZIMIDRhihJxZfl+H2fduit9FywtiAda3uoeM+22UfyzV8TydQUto749Cd5Yq1osQzbMaNk9MfNUpu00I8AowQuapr/skfmUzriRZYtG71DiiEzj91s/ve6GXU5M1oteChMcrQ62A+ceibxaoXxOoCszeeG89B+Uz6M2XUGcA0I/4hTjUj4uyIfZ/8kSluy9ymoIMax1zDe/tv12Pd3q77dldRaKStkRg8gb+K6IfKpeJPjupgZ9KK/z+hL0b++vsBZQAAAABJRU5ErkJggg=="
                            alt="" data-v-3345f269="">
                        <p data-v-3345f269="">Invite friends to register for {{price(setting('total_member_register_reword_amount'))}} each, up to {{setting('total_member_register_reword')}} people</p></div>
                    <div class="numberof" data-v-3345f269="">
                        <?php $first_level_users = \App\Models\User::where('ref_by', auth()->user()->ref_id)->count(); ?>
                        <div class="listof" data-v-3345f269=""><p data-v-3345f269="">{{$first_level_users}}/{{setting('total_member_register_reword')}}</p><span data-v-3345f269="">Number of people</span>
                        </div>
                        <div class="listof" data-v-3345f269=""><p data-v-3345f269="">
                                {{price(setting('total_member_register_reword_amount') * setting('total_member_register_reword'))}}
                            </p><span data-v-3345f269="">Reward amount</span>
                        </div>
                        <div class="listof" data-v-3345f269=""><p data-v-3345f269="" id="reword_balance">{{price(auth()->user()->reword_balance)}}</p><span data-v-3345f269="">Rewards available</span>
                        </div>
                    </div>
                    <div class="btnrew" data-v-3345f269="">
                        @if($first_level_users >= setting('total_member_register_reword'))
                            <button class="btn" data-v-3345f269="" onclick="ReadyReceivedForReword()">Receive</button>
                        @else
                            <button class="btn" data-v-3345f269="" onclick="notReadyReceivedForReword()">Receive</button>
                        @endif
                    </div>
                </div>

                <?php
                    $rebate = \App\Models\Rebate::first();
                ?>

                <div class="listinvite" data-v-3345f269=""><p class="rebatei" data-v-3345f269="">Interest commission rebate,
                        <span data-v-3345f269="">{{$rebate->interest_commission1}}%</span> for level 1, <span data-v-3345f269="">{{$rebate->interest_commission2}}%</span> for level 2, and
                        <span data-v-3345f269="">{{$rebate->interest_commission3}}%</span> for level 3</p>
                    <div class="amounti" data-v-3345f269="">
                        <div class="lefti" data-v-3345f269=""><p data-v-3345f269="" id="interest_received">{{price(auth()->user()->interest_cumulative_balance_received)}}</p><span data-v-3345f269="">Cumulative rewards</span>
                        </div>
                        <div class="lefti lasti" data-v-3345f269=""><p data-v-3345f269="" id="interest_receive">{{price(auth()->user()->interest_cumulative_balance)}}</p><span
                                data-v-3345f269="">Rewards available</span></div>
                    </div>
                    <div class="btni" data-v-3345f269="">
                        <button class="btn" data-v-3345f269="" onclick="interestCommissionReceiver(this)" @if(auth()->user()->interest_cumulative_balance > 0) style="border: 1px solid #68ff00;color: #68ff00;" @endif>Receive</button>
                    </div>
                    <img class="imgtask firtsimgi" src="{{asset('public')}}/CLREnergy/dist/img/5.8086695a.png" alt="" data-v-3345f269="">
                    <p class="becomea" data-v-3345f269="">Become a partner to increase commission income &gt;&gt;</p>å
                </div>

                <div class="listinvite" data-v-3345f269=""><p class="rebatei" data-v-3345f269="">Invite users to invest
                        in equipment rebates, <span data-v-3345f269="">{{$rebate->team_commission1}}%</span> for level 1, <span
                            data-v-3345f269="">{{$rebate->team_commission2}}%</span> for level 2, and <span data-v-3345f269="">{{$rebate->team_commission3}}%</span> for level 3
                    </p>
                    <div class="amounti" data-v-3345f269="">
                        <div class="lefti" data-v-3345f269=""><p data-v-3345f269="" id="cumulative_received">{{price(auth()->user()->invest_cumulative_balance_received)}}</p><span data-v-3345f269="">Cumulative rewards</span>
                        </div>
                        <div class="lefti lasti" data-v-3345f269=""><p data-v-3345f269="" id="cumulative_receive">{{price(auth()->user()->invest_cumulative_balance)}}</p><span
                                data-v-3345f269="">Rewards available</span></div>
                    </div>
                    <div class="btni" data-v-3345f269="">
                        <button class="btn" data-v-3345f269="" onclick="teamCommissionReceiver(this)" @if(auth()->user()->invest_cumulative_balance > 0) style="border: 1px solid #68ff00;color: #68ff00;" @endif>Receive</button>
                    </div>
                    <img class="imgtask" src="{{asset('public')}}/CLREnergy/dist/img/6.dd450411.png" alt="" data-v-3345f269=""></div>
            </section><!----><!----></div>
    </div><!----></div>
@include('loading')
@include('alert-message')
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function ReadyReceivedForReword(){
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
        });
        $.ajax({
            url:'{{route('received.tareget.member.registered')}}',
            type: 'GET',
            success: function( data ){
                document.querySelector('#reword_balance').innerHTML = data.reword;
                message(data.message);
            },
            error: function (xhr, b, c) {
                console.log("xhr=" + xhr + " b=" + b + " c=" + c);
            }
        });
    }
    function notReadyReceivedForReword(){
        message('Not yet ready for received reword.')

        setTimeout(function (){
            document.querySelector('.loading').style.display='none';
        }, 1000);
    }


    function teamCommissionReceiver(_this){
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
        });
        $.ajax({
            url:'{{route('received.invest.commission')}}',
            type: 'GET',
            success: function( data ){
                document.querySelector('#cumulative_received').innerHTML = data.cumulative;
                document.querySelector('#cumulative_receive').innerHTML = data.invest_balance;

                if (data.invest_balance <= 0){
                    _this.style.border='1px solid hsla(0,0%,100%,.3)';
                    _this.style.color='hsla(0,0%,100%,.5)';
                }

                message(data.message);
            },
            error: function (xhr, b, c) {
                console.log("xhr=" + xhr + " b=" + b + " c=" + c);
            }
        });
    }


    function interestCommissionReceiver(_this){
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
        });
        $.ajax({
            url:'{{route('received.interest.commission')}}',
            type: 'GET',
            success: function( data ){
                document.querySelector('#interest_received').innerHTML = data.interest_received_balance;
                document.querySelector('#interest_receive').innerHTML = data.interest_receive_balance;

                if (data.interest_receive_balance <= 0){
                    _this.style.border='1px solid hsla(0,0%,100%,.3)';
                    _this.style.color='hsla(0,0%,100%,.5)';
                }

                message(data.message);
            },
            error: function (xhr, b, c) {
                console.log("xhr=" + xhr + " b=" + b + " c=" + c);
            }
        });
    }


    function copyLink(text)
    {
        const body = document.body;
        const input = document.createElement("input");
        body.append(input);
        input.style.opacity = 0;
        input.value = text.replaceAll(' ', '');
        input.select();
        input.setSelectionRange(0, input.value.length);
        document.execCommand("Copy");
        input.blur();
        input.remove();
        document.querySelector('.loading').style.display='block';
        message('Improver Copied')

        setTimeout(function (){
            document.querySelector('.loading').style.display='none';
        }, 1000);
    }
</script>
</body>
</html>
