function  getdata(){
    var answer1=document.getElementsByName('iphone');
    var answer2=document.getElementsByName('halloween');
    var answer3=document.getElementsByName('seeds');
    var answer4=document.getElementsByName('Halloweentreats');
    var answer5=document.getElementsByName('owls');
    for(i=0;i<answer1.length;i++)
    {
        if(answer1[i].checked)
         {
         localStorage.setItem("answer1result",answer1[i].value)
         }
    }
    for(j=0;j<answer2.length;j++)
    {
         if(answer2[j].checked)
    {
        localStorage.setItem("answer2result",answer2[j].value)
    }
    }
    for(k=0;k<answer3.length;k++)
        {
             if(answer3[k].checked)
        {
            localStorage.setItem("answer3result",answer3[k].value)
        }
        }
        for(l=0;l<answer4.length;l++)
            {
                 if(answer4[l].checked)
            {
                localStorage.setItem("answer4result",answer4[l].value)
            }
            }
            for(m=0;m<answer5.length;m++)
                {
                     if(answer5[m].checked)
                {
                    localStorage.setItem("answer5result",answer5[m].value)
                }
                }
}