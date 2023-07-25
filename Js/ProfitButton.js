   document.getElementById('calculateBtn').addEventListener('click', function() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
               if (xhr.readyState === 4 && xhr.status === 200) {
                var profit = xhr.responseText;
                document.getElementById('result').innerHTML = "The profit is: " + profit;
            }
        };
        xhr.open('POST', '', true);
        xhr.send();
        });