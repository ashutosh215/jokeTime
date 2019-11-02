<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Joke Time!</title>
  </head>
  <body>
        <div class='container'>
            <div class="row header">
                <div class="col col-sm-12 text-center">
                    <div class='page-header'>
                        <h1>Welcome!</h1>
                    </div>
                </div>
            </div>
                  
            <?php

            include "includes/db_connect.php";

            ?>

            <div class="row jumbotron">
                <div class="col col-sm-12">
                    <h3>Why are Jokes important?</h3>
                    <p>In Today’s scenario, life of every person has become so much busy that they don’t get time to enjoy and relax. People are getting more stressed due to their hectic work schedule, bad habits (drinking and smoking), finance issues, disappointments in relation, struggles and tensions. Jokes play a very important role to ease our lives and work as a good medicine to relive our stress.</p>
                </div>
            </div>
            <div class="row">
                <div class="col col-sm-6 img-1">
                    <img src="http://www.theamericanschoolofprotocol.com/wp-content/uploads/2013/03/iStock_000006664881XSmall.jpg" alt="two men laughing"/>
                </div>
                
                <div class="col col-sm-6 img-2">
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUTExIWFRUXFxcXFxgVFRUVFxgXFRcYFxUXFxcYHSggGBolHhUVITEhJSkrLi4uGB8zODMtNygtLisBCgoKDg0OGxAQGy0mICUtLzUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAFBgAEAgMHAQj/xAA+EAACAAQEAwYDBwMDBAMBAAABAgADBBEFEiExBkFREyJhcYGRMqGxB0JSYsHR8BQjcjOC4WOy0vEVksJD/8QAGgEAAgMBAQAAAAAAAAAAAAAAAwQAAQIFBv/EAC4RAAMAAgIBAwIFAwUBAAAAAAABAgMREiExBEFREyIyQmFxsYGR8AUjUqHhFP/aAAwDAQACEQMRAD8AfJUuLUtIktIsIsRs5kweKsblWIqxsAgbYdSeBYyAj0CMgIo3o8AjICPbR7aIa0eWj0CPQIytFbL0Y2jCoaykxtJtCvxLxPLkAqT3ukXMunpGMlqJ2wBiM5Z05hNPdBta8IHG8yUpyy7X8I1YtirzJpKmwMWcF4NmVZzX05x0lPFHKlarlQq0cjUG8OGH4uFWxMVeIuF5lL4iBEinZuUKZcSyeRpWn2XsYxPOd7iA9Sbju7xaqcPPjeNMuhmbBGbwAJPtGoxKV0aVIDzXbYx4JrdYZhwpPcBmyqv+QZh4FVuR6xnQcINMYATENzYa5b28Dr05QTnOuw/Gn7Cx3gLwZwCimzDoNPGGyp+znIoMyqlSyxsA2bp5R7IwefSLnAWaigFmlOrWBNrkb28r7wDNlTn/AG/JTivdFik4dmAZj7Qcw6coBRuUZ4PjImLsNoA4/MYMTy8I4zeTLXHIESmFuTTi89JTkqdOnOBGJY8rqRtAjF6pi3MwImXMdTB6dJJtgaSb2SeQSY1pLvGMtbmCYkqF5Q7vRfgpidk/4jztu0OpjTP1MWJGHzCMyqSPD9ovin2TaS7CGHMJe8eVE67HKd+kUlZufLrFxbWvfWKaQN+dlEzCG2i8KwAZTz0i9RYeJuo1MYjB/wC8A2w1MYemzctU9AKZh1ySBpHsM8ynFzHsE+oMcGd6RY3KsRVjYohFsDKIBGYEQCMgIoIkQCPQI9AjICK2aSPLR7aPbR6BFFkiWj20TMIos11A0NoTqjg8T3Z5mt4drR4SBG5tz4BZMM5PxHOj9niBweUNNDSJTS7AAAQUqqhQIVMcrMytrYRp5avpsXrHGLufIucXYzKd7G1hC09VKsctoE8TOM+8CZNRluSdAPnygrxP2BRPJbDNTXLLa7a9B+p6RjJxeUxVpgYLtlVj3gd78uQ/bnClNns7Ek8+cZrNvz2hn6f26Goxqe/cfKbEKdQSksWIuBNJIBG2m1/M87Q0UedqXtaeSqTX0DS2loCTax1V2Z7X7pNtD5wg8PVpWauVlUXANwHJzEi4V9Bb2F7x0hcT7TJLly3Gd8wLWBKLYEgAaBrswFvE7wlm+0ahNipiGHH4Zsxpsy18gZjLBtr3jr52j2lwufbNKzIh0Ki430swvrfTwvDLiFGJM9ZjaqwAY7AH4cw8xy8NOdj0iTsVtqbXWxBFuh3623+UAr1DS6CTiT8i3Q8PuqZpRsfwN9L/AE/Tmr49XzLlXUqw5EWP80MdSqQ0vMwOUaEkqSltteYGt7jbnC1idIlROCOBmCnKbb7XHmP5yjGJp1ukBz4kp3JyUzczd6LkwJl5QzcT8LJJBZT4wkLTu501EdBSqXQkqVHn9OWPdEEZOAzGW9j7R5hQyOA2xIjtGE0UgydLbamC0+KMVdb0jiU7Dsmu8EMOxhJa5W+UXeM5IluQh0vtCfMlk6xXkuPvnbC9VNWYTlitMQgGwj3D6ZiRqNYZJ+FAAEnp6xaxa9ynal6AeBVjq1ht4wdp8zFnItfQfrAubJEtgyjSM6vHRmyoLgbnxiVL9g+DTrkEG3iQKOIX1iQLgxvaPpBRGYEQCMwIVYFI8AjICIIyAijWiARlEj0CKLPIyEYOwEYPUADeITZnNMDWqbNrAzEcYZW02gPX4rcFjyin4AVkTY1VOKqo3gJX8SgA2hLrseBbKGjVVz1y3zRht9bMvIyxinF0y+psOULtdxYz6AwJxipG14X2maw7GJeQanfku4hVZjeMTILWUam2w1PXaKDteH37NsOWbUzJtr5JS2HRnI/8TBqr6cuvgYwY+VKRQosKZzZQSfAEkftFmdw9MU/A1+lj7x3CVRBdcgBPQC/qY1zaYWPd9/2hN+vbfg6U+jn5Oe8D8K3mCZOUgAjKOrX3PgBDljFckuYGGjhb63tZhcHw1FvX2G1hdXsht5eO+kFpGBTKpSC4ZgvdJBQ+VwbHl1gF3zrlTGljmJ0ijV8RyaiW6vL0FiWBFiBpcqRfc8gd725xQw7iGSgUB7m1rC4JsNOhY+d9Nib2gy/2eTTJIvZuVyDoNgWEJmK8JzqU94Gx1UjXVeo3sb8vCNwsb62K5U/Mj9S4ipMsZgQ+ZtW1W6qbX6kP/NIA47RdkVnKWCq9/hOZTcAg+H6gDnqOk4mySwpA7rE68yUtYk/Tn3YO4fMppys1VPdA6gZAtyTc65gDdRpbbx3icVHfsCU1lfGVtidXYlMnMUY6A2PpG6Rh8sAcjF7G+FXlAujZxuG/ELaN6ixty2hKlYhMWZlJ52sYcjudz4OPcNU590XMcpra7dLRlheMz8hXtCB4RrxOkmumYbQJokmZrKILFJrsnFOS9WTWd7Ob/r5xsqJahdN4lRQOozvcRSE7MLXjNdvo1PjosUFVlOwMWa7GiQF5QELWMYz2vGkzX003sYFcTpZUHvW0Eb6NKdJaq2j2156xQ4LkntC7aoo+cM6CSWa0sXPO0ByU19o76fFpb+QOaCWdQ2hiRefDwTtEjHN/If6f6HegIyAhRxLiorP7GUhYjc8hA/E+OXp2AmSiAeekD4vevcVTfHkl0dAAjKAXD/EcupTMp9OYg0k0GMtaLVJmwCIzWjIRjMXSKNADGq4j4TC7VVs1iAGtGHFlYUmW1MAFxcjflBUuuxK62xuFFdbnWFLiFX+G1oO0HEIawOnWK2O1ksruDGZRh6EKZSka84Ez6+Z8N9IY6qctusLc1czwxKTW2WgfUPeKxEMFThJK6CB9RhjILmCc5XRqaQPtHUPscIIqOtpfyL6/NY5gYbuAca/pBPcAszBUVeVyblj5ZR7wP1EusbSGcFKciZ2SfLJHP3IitTSbjwvbnAfBsTrzYzpChDzJym3kYNzZ2WWzjQbnzEcipcvR24fJbFLiLG5dLMyojFt+6PqY9ovtSmJYNTOQLa2YfO1oozcelmd3ZeZ2JOov6HwEX6imrJiX/qAvMrklstte6BluOWtzsYZUwkuS/uwdzTek9/0OicPcTy6pQVFiRqOcFJqJMGV1DDoRf18I4zgdfUyHbuhTcWZQAreak6ecdZwWqM1cxaXf7wVs59TYW8rQG01Ri8XFbEfi7AZaTFSwAZgFGXQ521uRta/zjRiGGS6NqczpQmsEmCzM2TR7i4GjEB7a+EdMm0qO6sy3K6j+ekAOIjLlODNs4d80tGXMLhQrAX05/MdIlW9G/SNLJ4/z/OxU4vxaXTS5Sgd2ZKDqCdQGJsPQACOQVjZmLjcm8PX25TQZ1N2YtL7IqNLWYNmK+Fg6m3jCzw7h+e17R0cP24Uzi+pX+9VfLLFPjA7LKw5bQKw3ElWZc9YY8RwRCLC0KmIYfkN4JDmloXUoaMXxOXMlWU+cKHZWjATzteJOmG0amddGpjiWJMoHU6xqmSM7hE3JsIpTqg2tDbwThDW7cqSTonh4xK+1bYxixOq0MmFYUkqWE26nqYsHDragRXxKlcC5NoL4HPzyhfcaQhdtLls684140UBI8IkFmlaxIH9QnEo0mNj+rZguha1/1gd9pizn7Mhe6SBfxO0asDpBmzMSdb6WEOkqklVFlmKXA2DM1tPAGC5LnHlVC8Y3WLihcw6hNJIWZ2hzHcjRfKG7AcWJW7NeLFTwjTTgAyMLbZXYW8gSRFOq4OmILyHzj8Ld1vQ7H5RcZ8d9N9ief0+SNOVsbaavVucW3cWhGwZHRwHBBGhB5Q2scy2i6ST6B48ja7Rz7jSepmbwlzHDQV49V5c619DrC2asAbwZS9C3kJJUlNjaNNTW3ECVqSxiOzEgQRQ15K12bTLZz4RtpqHKbmLtECo2vBBVV/AwJ5HvSLbPUmpsbRUxwoU0tFbEqQg90wFrZjAam8a+m6ezE/APnywDDF9nNYkuulLMtkc5ddg5H9s//aw9YVnmXMY5yCCpsRqD0I1B94NUcpcjMPi0zttZw09RnmVU+YXJOSUjFElqGuoGXUmwF2vrc8tI2f0Bp6V1BOvVix59YYcMqFqpEqoGgmor+RYAkHyNx6RUxGX2suaqbL3T52B/URxedN8X7HoI1raOQubTM17EHfrD9geaYgOYEeFoRsTpsrkE21jLBMQaRNujEL05H0PKH8sc56Mw3L7HjEpFyBoPE7efhBrCeJnpykqeMynRXLZvTMfoYEpXS6pbKRm6dfKF2vLr3G1UEkdRyuPKE0t/axqpmp7O5y3BAIMVsQw1J+TPfuG4ta+o115Qr8B8RdtL7Nz31FvMDnDhIeBp6emc2prG9o5H9uNHlRWtoHVhzuGXKxvysQo/3COaUWLsgsFjvP2sYHMqqJuyUs6a2G5XTNbra17eEcVwiiAFmFiND5846eCl9PTOZ6rp7JLxSY3L3gbXTix3gtXhUXTSFubOuYPCXlAJ7PAusScthFiVSsdQIuzcJfLmKnaCS1sur0L7SiY6Hw5xXKl0okk5JiiwJGh6GEYixsREnLpGcuNZOmHxZqh7Q8Yficohi87tJp66DyAgvhzOCG5dI5ZShi6hRc3Fo6somOoBGUWF+p0hTNjU/wBR/BkrJ59gm73OhiRplKQALxIU0g/IVqWuK20howPFrkcut4CTMINhveMqUmU3fGn0guRTaKjcnX8Mn5l3gtIEIXD2JAOEX4XHdP3c3IX5Q2Sq4WIPdddwev6wilxfZeSd+C5X0CzB0PI/zlC//WGUWVza0M8qcCNSNoT+P6fPK7SUbldGtqLHnfw/m0N46W0vZnPzw+LpeUc04+xVZs3Q3tCbMck2g1jVIVuTAlJfOOpM6OfL2hw4ZwJJqXMWMR4dWUbg3EWOAZt7AEXO4hm4mw85MwHnAslNVoEk3tijLCAWItFKoQg9w2i1OpMw0gbIuHsx5wvGN8tmn4NOIsyi51hYq5pYw4YlYi3KAHYLcw6isbAhS0YQTxCRbYRUWSekXvQeXvs6t9jWN55EyjY96UTMl+Mtz3wP8XN/94hmwpyJlTLOh7S5vzDKAD8j7RxDAMRmUlRLny/iQ7HQMp0ZD4EXHz5R2efNl1CS62TcoylJq88h0YMB99f5vHK9Vj43yXh/ydj0WZVPB+SvW4BT6zLBr631Y78rcoWarBhfuy212LAjU7QyU+MphEpJM2XMnS2mWlzEy2VJuveuR96//wBvDXbjlbOmuEl/2luLspDMQNQbkd3bl1jMu148fI4qW9OdnP5dSaaYpdSLsFUD4iSbCy9Lw5Y3KDIswW1urW/ENDCXikrLUGYzZyrXF+bk6e2/t1g1RYiWp5yndSsz3Nm/SC5Y8UWqfv0WOEppkz3OtrHwGkdD4RxMzVJPUwiVc8SqNmOp7cyx5FS4v62glwXiKrIY35kD66en0hbLO1yMvVLidRlNcRzDjTgZxNeopVLhyWmSxa6k65kHME303v8AJ/wqpuoudhrA6g4jSZdx8Jso63A/cn2iRlaRz82De0z564hLSzlYMp6MCpHoYD08nMY+j+JAlUTIMpJxUBnkTFH9xG+/KY6q4sbW35RzTEfs1m6zaC82Ub3lOQs6WeaHNYPbrofDnD+L1Cc6fTEnicroF4TLRFu3KL9bjEooVG8K+KyKmR3Z0uZK5f3EZPa41gUlRaCcOXYvw35PcSngtpFRZhMSoe5i1IkWW5g6rSDa0i/wyuSYJp1ynaOtyhmRW6i8cbw+a4cBfvED3jrlLMyylToLQl6tbaY96S9JnpUR5FZpo6xIBxDc0FxJttA+uozN0tqIKMdIDYrjP9OLkCx2HMwGNt9DL0ltmGH4stHdWS/iDrBeVxelZaUo7Kfa8t3PcJvojnkG2vyNvXj+P45NmMSRkW+l9z5CCfAU4PMN8x0y3Pjrcetocv02odvyAWblaSGbj7i2dLdpAZpVtHA/1CSNVUg2t+YQ3/ZlVVNRTgOslJAzIZdnaYwK/EXJte52ttzjfK4do8TVDVpnnylC9orFHZQdLlSLjffa5g/g0uhoyZEkqjc1ZmLk9SXN2hd3H01KXZKluns5Dx5SdlMeUd1PuN1PqLQmKxjqP254fbsKlNmJlP5gZpZ9g49o5ZLBjp4b540zjVi+m3J0L7NaQMwYmxjpPEGUSTfa0cc4bxBqcAqdYN1XEMyosGOl9bRjJLdbBy9bXyZz5uUaQJlJmcm8Y4piAUWvAaZiZvcG0Rd9ozxDdfKHWF6pIDaGPJtYz8zFWdMgnZcRov8AbKdSYsSTLItpeF0zDElzSDGbjkaUFuvQBriCHCvFkyim3HflPpNlk6MNsy9HHz2PgKnTbiKgl3MTgqnVBYbl7R9BpTSK+lUIweWw7h8OanowI23BECp1BMlLlMwMRoGynPlGwPK/jCp9mVZOp5hUXaS5GcfhY6K6/m5W+8NOQjqVbKD7+4jl5E8VcfKO36T1XNdnKsVoDmuRoNh9SfGKkomXKm30MwBF9TDti9OE5XF/OEfHpuecANlI22sv/qD4rd9MNna8ovcRVl5SSgd5syYfIKqJ9HgXQ1bqwIJyowIHItf5xqlyWmuT8ztBqThuVc/3VGl+ZO7eUbfGZ0BlOns6HRYtfD586X/qCU9l6OQVW/kSPSOaycYmpLCI9s2VAfEff8+cU/8A5OYFmSpbEJM0bXcc/eK9M2eYqjZWlgepJP8A2iJiwKE9nP8AU5+dfb4H+rUzqGmq1v2lOqy5libmW1srXGt1P1MHeHOKg7BXcK3/AFNm8BM3B/yv5wvcKYgsuXkfWW6lGB1HhcepjOhwmQ7EqdQfhJ0gFJdp+wPk97R1W6zBlZQQRqrAEEeR0IhVx37NMOqgb04kufvyP7ZB65R3T6iLmHkogVToNlOoHlzHpF6Ti1jaYLfm3Hr+8CjK5fTDdPycK4t+y+oobzFPb041LqLMg/6idPzC462hVqZgy2EfWasCOojnHG32VSqkmdSFZE46spv2TnrYf6Z8QLeHOG4zqn9wG8L8o4dJqAlmG4IPtDpL4nluoINjzHjAjGPs9xCQf7ki6c5iMHQedtV9QIWavCpktyp3H8EMqIv3KinHQ3TMbFzrHkLkqgUgEn5xIvhJf1TtVFODCAvE9AzDOFzsBZFPw3/EYvYVLAANyQdQT0gm8oHfz9to5CrhW0dnjynTOT1fDz6Ei7H4nb6KOQg5w8yU8yVKRbu5N+ugP1MOeL06dle2w+g/4jmdJMLVZK7qbDw/aHYt5paYBzOJpnSJ0xpJWoQlXU6oDuvMRv44nTK6glVUmUQZcwljs4QAhrad5bkE/wCPhCViDzpm0xifyAtpfcsNI6DX0zTcCmqS0pllNlBcq2dNVDHnmIAy88wgSng5/c1kra3oBSKl8SwmfKILzZDoVsCxNug3JyloQHwaerW7Cbfp2T39rQ9fYzPaW86UwKtnQMGFiCLixB1Bjr86qCm3hBpzLC6jXWxL1GB5Gq/Q+bWwyqUa008DqZMz/wAYlO8xTYoy+asPqI+klnXS43EYSZxaLfqdrwL/APzfqfM2KEHW/wA4GCXePq2fQS5gtMlo/wDkit9RAiq4Iw+YCDRyhfmi9mfdLGCT6iUu0Zfp38nzYotFeYCTHVuMfsmaWpm0TNMA1Ml7F7f9NvveR18THPaejuNRqNDfcEbg9DDCuGtoDUuPJXk0wtHr0t9otpJtpHstgt7xnkY2BZiW0hl4K4KnVx7QnsqdT3ppG9t1lg/EfHYeO0EOEODWrpgmzry6UNYnZprA/BL8ORblsNduj8W4nKpZAkSwqkJlREFgoPdGnQC59IDlz6+yPP8AAeZ65MAYjiEmQvYUi5VXQvuTp3iD1PNt+W0CcE4rmSmeURnlAMx1sykb5T0PT+EdNmZUZjy+sA5EwiVPfqAo/wBxv+kZWKWtMqLqa5IfZeIirl51ORTcf3NLW/xv7xjI4epwuczVm3+KzAAfO59beUCeGWtJQHYkD1O3ztBKdKW9s7frC1TxbSeh2fWP8y2ap/8ATyW7uotoF1F/EmBNdUTJunwp0/frBBpKbqpY9d40rKzEg6W5D1/aCRpdg8vqbta8IX8QGRNOZyjxJ/8AcX+G6XN3+s4geSLlH0MaZih6uUh2VM1vzHX9oIcHHush3SY3zJ/eDXTUCq8l1VsuUxpWpeWbqYu1a2v4W+cUKgQKeyMP4TxKbgMYaaXF0mDcfz+GOQVJIOkZU2NOjb/8xV+mVdo3GRo6/wD/ACrUxzDvSvvLzA6r+0NNFVpNRZiMGVhcERx7DuJFmLkc77HnG3COJHoJ3N6dz3lGuUn7yjr4QD6NePcPOQ67UyA4tr5gkEeRGojlPH/CAdi4srkG0wCwNuU1FFiN7zEAI3ZCO9HUqOsSaizEYFWFwR0MeVklHXK9iD108iDyPQxiMjh7RupVI+SK6XPkzGlzEZWU6jfcXBBGhBBBBGhBBiR9GT8BysVSrCKDopmMpF9dlYAewj2H161fALj+gq/1DSVUOc63tcKLgGwXQbwUSKFI9wt+ghjw3A503XLlU8209huYVyYNIdx+tVNdAXESShUcwbRyG02XNKBSbsS4FgzC+2u+97R2Kup2BsRY8v8AiFDHsKLOJqL/AHF3A++vO35hF+mv6bcv3D5p5pNEoeKzlWTJoW7QCwM7uopuOS7jc7jbx0dqOkpp4lLVVRmTs6zDKlTSJOdbMB2SHUAi92J23tpC65lvKBKjUaEjXyMauEsLH9UGdgiDUgfE3h5c9ekVXF7pda/qa49d9j4OHjKr5tWtuznLLY2OomobMbdCtj53izLxcTp8xV2TKhP5siufbOBE4u4hkyaGbMRwe7kSx++dFHv9ICfZ9hzJLTNfO5Mx775nsdfEAKIxMt7p/sAddLY5XKDTdtAI302ka37zE8hoPIb+8blGn81jXgA2W0a4j2KiT+Q2vqfHoItLGjJ7CLx5wQs8NUU4yzrXdRtNtz/z8ecPUSLTaM1KpaZ8vzgQSLaxuwWkE2bZ7iWozTLb2uAFB5FmKr6k8o619onC8sj+qRQrXAm2Fg19A/newPW/hCHJkqkqZbcujH/FHUD5s3vDKy9aEKhzWmHlxS01CxCSZQJCjRVVF0AA6Qt1U95xM1t3bN5DkPS4izxNK/tAD7zoPQm/6R7UywqKBuTlHtAp0uzT2AOIp+WWiDdzf0jRiaZKVfzP/wBo/wCTGWNNnrsg1EsBR5gaxY4vk5JMlf5fn84YT/Ci9BPCwRSFhuqhh5qQf0g+XzrmXcWYeIIBgPw4t6Vh+Qj5RuwqeezQ/huh9NvkflCtrbf7lpl+W1yLjrAmS/ebxJgszABj7QIpVvM9YqfcjAOMP2dYp8h7C0FOH2yVk5OTgOPXX9YH8dybOHEeSajKaWpG3+k59wL+lvaGWuUL9UV7jJXzbOF/FMT6H9VjVWDcxr4mlsZfaILtLIew5hTcj2ze8aKqoDyGddbpmH1EBldJllGvNmQfizfKBtXLsR43+UbsRqAWp2GxzfMAx5Vm89V/DL+sMT0WkD8zLsTBnDsRD919ufKwikZFw3hAwHvL+G59bGNtKkaXZ1DhHi9ZEwU7MTKfSWxNlub27x2F9L+PhDHiJq5w7fDqgFkbLOpZyqO8p7yknVX5b2O4Ijik6eXVwdgSy+F97ecPfCte9YgeTM7LEJCjvX0qZSiwEwbFhoL+UKZcKn71/wCBpfsGTxyE7s+TXSpo0dJd2RSPwkjUHf1iQSl/aBlAWfT2mjRwCLX/AJaPIBxX/H/sZXpczW0gpwnhiSxLdwC7EBQfura4PnDVXVGWwG5+QgSxtlI2uCPMfuI1rVl5rg6WYW8tLQWnyexaFxWjUaZXEyWw2OYdQdriF3FMPaU2VvNW5MP5yhoV7Tz4/wA/WLuJYes+UUO41U9DArWxjDk4vXsc3nnKNVv5dfKAldMN7k5VF+doZ6ygK5kdSGH89YGYZwpNqZnfukkHViN/BAdz47D5RMTS8jORtLewVw9g71s1QQRTSmzkG9mbkvmdz0HnHXKKjyr4n9Y24bh0uUioihVXYfUnqT1i6Nj5GN3fJijZjKlR66/zoP3MbZJuPb6CMZhtv/7MYMmhNCDtyA6CL6HSBwUlh159AP3i9Ka+2wiyI2xIkSLIaK6lWbLeW4urgqfX9Y41jeDTKUy1fZnmyWPIiYVMh/IsgH+8R2yETj+Urvkc91gFNjYrn+Fh5MlwY1N66BZZT7Eyol9pKXqGX5XEU58y9VLlfgBmH0BMEqRj2gRrXa6sOXaJYm3gR3h4EQr1FVlqqxyfgkEDzJVf1jcLe0L6KHDY7WqmTTqASx99P0ghx38MkdR9TGPB8jJStMO7tYem8TjdrzpK9EBg295f2IHOGltII/KYxwTXtE9R5iLGAraXb8pijhD5agjrAH+Yr4L86ZZPeK2Ei736RvxTQNGGDLoT4GK/LsnuUuL6XtKct0he4XYTqebTt1uPAnY+4+cOap2kpl33jnuDkyKsyzpmuvruvzAg+J7hz8Fjjg9cXlZX+NO448tL+ogbRHsXmU5+GxaX/gd19D8iIzrLqwqJYubWmL+IdfMR5XWmosxNSveX/wDSnzFxFJf2f8kTF2eSuRD/APzm2H+LC6wSpO9UTD0Cj2EU6oZww++tvUA3U+xYRfpO4XJ3d8q39oLXg0e5gSy8lVmb6gQEpzdb9GPzgnRsLVBGwDa+e8UcOT+2YtGpMfuv5RMAq5kqdLmSmyurAgjw39LX94zp1ur+UeYCnxN00i6epY36PD9bNOP5YSxjEWmzpkxviZrm2g8h4RIF1T99vOJAlPR67kp6R9HS5v3Tp/NR6G3uI0sLVF+ov7W/eMqiWWF0+JdR+ZRup8RtGvNnaSw8Qb9QL2+kLHjDZWG04ef7QaR7EeIgFVa1CjwzfSDMzbytGWaRZNjGplF+seqdAYzSMlmL6L47CPZY1I8APrGM495R4x4j2dvT6n94hDZSnuDwj1uvtEQbjxjNxFkKjkk5F82MX5KAC0VBZdACx6D9TG6Wrn4rKOg39TEIixEjB3VRckAdSbRVlYtJZsizAW10F+QvvF6I2XA4vaOd/aI2SoRm/wBNkWXM8AxPZv6MCP8AfDrTuFuzOtzre/0HKFPjpkm2JF5eXI+m6uTr6EA3ikweXuRCr55SarFrMpGbqyi9ifzAE2PMEiFXHJn96rb8clW93l3+d4LY3ImKOzde0yCysDZmUbEH8YG456QDnETJbMLkiS8tswsTlZZik+gb2MOYlrsVQ1UMvJQSAOeUn/cbwK4l71UPAKPYCDcsXo5H+z5CBGIJerPmYxjf3N/uRjPhK930gIhy1H86wbw82FvCAFW1qgHrA47bKYYxz4QesZYOv9tj4fpGvFNUXzMWsOS0r3jL/AX7lPDptiRCnxzQFWFQnXW3IjUQxK2VzG6vlK6lGGjD+esFiuF7LTBdDWB1lzBtMHe8Cd/neKdZLanYsmss6so+7+ZR+kDKGYaWY1PM+Am6Hz6Qbmzbi2/j1HWCudP9CNaYErGBImob238QeX88YzrKsM9OR8JYEfVj+nvFWup8rEy9Cd1Pwt+xigZ1uzJBUy31B5Bje9+m8FU7NpBiT3aSa342IHlHtHLtK9Izq5dqeWg6kn3jcVstugjGyb6KlIO6/lGvCRaX5sflG6nGjeURJGVFHO17eesVb60dn/RIbzuvhA2tazt5xIsVNPmYnr+0SImtHauL5PR9HVOneGh+R8+h8YrBwQxGjKQ1uhG/hrEiQmjyhvRL1V/+n+xgqekSJGWWjykOhHQxvWJEiFmkm8wRJy97zBH89hEiRCFFsTYzJUtQLsbMTr8NybegMFZkwR7Eil7hMiSU6+DXLIPj7x5WVbSx8Ivy/eJEjU9g30I+N4hMYnMxP0HkIq8LMXqlA3sxHnlMSJDbWoYv+ZD9S0Sg94Bj4jaFjiuYDOmKdsqj5D/yiRISYTJ+ER6oaFDqV1B8OXtCulOBOa2gcMGXlmykBh46/OJEhnF4Yoxhw4XpZY6MB84FzheoJ/MYkSJPlkYxSNPaF3GNHDdDEiRWLyRhWc+aSp8YISdJSxIkYoiA1WLPfrGyqfuq3MRIkE+CAvGKBaiXroRsehhakV7yG7KbqORESJB8Xf2s3PfRuqZwN1PPUQMmvoQdQdPGJEgso0gtQVHaS1DfEhynx6H2tFya0SJA68mX5NdMLtbrGrEpuUqw5ExIkDr8SPSf6MtenyUvO/4NiOCL9YkSJAz0Ce0f/9k=" alt="two men laughing"/>
                </div>
            </div>
            <div class="row jumbotron">
                <div class="col col-sm-12">
                    <h3>One joke a day keeps the therapist away!</h3>
                    <blockquote>
                        <p>“My therapist says I have a preoccupation with vengeance. We’ll see about that.”</p>
                        <footer>Ashutosh Shukla</footer>
                    </blockquote>
                </div>
            </div>
            <div class="row">
                <div class='col col-sm-6'>
                    <form class="form-horizontal" action="includes/search_keyword.php">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Search for a keyword</legend>

                            <!-- Search input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="keyword">Search keyword</label>
                                <div class="col-md-5">
                                    <input id="keyword" name="keyword" type="search" placeholder="e.g chicken" class="form-control input-md" required="">
                                    <p class="help-block">search for a keyword</p>
                                </div>
                            </div>

                            <!-- Button -->
                                <div class="form-group">
                                <label class="col-md-4 control-label" for="submit"></label>
                                <div class="col-md-4">
                                    <button id="submit" name="submit" class="btn btn-primary">submit</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
                <hr>
                <div class='col col-sm-6'>
                    <form class="form-horizontal" action="includes/add_joke.php">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Add a Joke</legend>

                            <!-- Search input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="jokeQues">Joke Question</label>
                                <div class="col-md-5">
                                    <input id="jokeQues" name="jokeQues" type="text" placeholder="" class="form-control input-md" required="">
                                    <p class="help-block">Enter the question</p>
                                </div>
                            </div>

                            <!-- Search input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="jokeAns">Joke Answer</label>
                                <div class="col-md-5">
                                    <input id="jokeAns" name="jokeAns" type="text" placeholder="" class="form-control input-md" required="">
                                    <p class="help-block">Enter the punchline</p>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="submit"></label>
                                <div class="col-md-4">
                                    <button id="submit" name="submit" class="btn btn-primary">Create</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
                <hr>
            </div>
                <div class="row">
                    <div class='col col-12'>
                        <form class="form-horizontal" action="includes/search_display.php">
                            <fieldset>

                                <!-- Form Name -->
                                <legend>Want to see all jokes?</legend>
                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="submit"></label>
                                    <div class="col-md-4">
                                        <button id="submit" name="submit" class="btn btn-primary">Show all jokes</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
        <?php
         $conn->close();
        ?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
 
