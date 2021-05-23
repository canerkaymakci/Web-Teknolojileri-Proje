    var request = new XMLHttpRequest()
    request.open('GET', 'http://data.nba.net/10s/prod/v1/allstar/2016/AS_roster.json', true)
    request.onload=function () {
        var data=JSON.parse(this.response);

        if(request.status >= 200 && request.status < 400){
            data.sportsContent.roster.forEach((roster)=>{
                roster.teams.forEach((teams)=>{
                    var teamId = teams.teamId
                    var table=document.getElementById(teams.teamName)
                    roster.players[teamId].forEach((player)=>{

                        const tr=document.createElement('tr')
                        const td0=document.createElement('td')
                        td0.textContent=player.jersey
                        const td1=document.createElement('td')
                        td1.textContent=player.firstName+" "+player.lastName
                        const td2=document.createElement('td')
                        td2.textContent=player.teamAbbrev
                        const td3=document.createElement('td')
                        td3.textContent=player.positionFull

                        if(player.starter==1){
                            tr.setAttribute('class','table-warning')
                        }

                        tr.appendChild(td0)
                        tr.appendChild(td1)
                        tr.appendChild(td2)
                        tr.appendChild(td3)
                        table.appendChild(tr)
                        
                    })
                    

                })
                
            })
        }else {
            const errorMessage = document.createElement('marquee')
            errorMessage.textContent = `Gah, it's not working!`
            app.appendChild(errorMessage)
        }
    }
    request.send()