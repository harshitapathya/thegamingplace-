#include<conio.h>
#include<graphics.h>
#include<dos.h>
void main()
{
void heart();
clrscr();
int gd=DETECT,gm=0,x,y;
initgraph(&gd,&gm,"c:\\tc\\bgi");
for(int i=-80;i<=200;i++)
{
setcolor(0+i);
line(0+i,0+i,80+i,80+i);
line(0+i,1+i,80+i,81+i);
line(70+i,47+i,80+i,80+i);
line(45+i,70+i,80+i,81+i);
delay(40);
clearviewport();
}
setcolor(RED);
heart();
line(0+i,0+i,80+i,80+i);
line(0+i,1+i,80+i,81+i);
line(70+i,47+i,80+i,80+i);
line(45+i,70+i,80+i,81+i);
getch();
}
void heart()
{
ellipse(getmaxx()/2,getmaxy()/2,20,212,50,50);
ellipse(411,240,330,155,50,50);
ellipse(340,20,230,260,100,320);
ellipse(390,-10,290,310,100,360);
line(320,335,370,380);
line(370,380,425,328);
line(getmaxx()/2+50,50,getmaxx()/2+50,140);
line(getmaxx()/2+30,50,getmaxx()/2+70,50);
line(getmaxx()/2+30,140,getmaxx()/2+70,140);
line(getmaxx()/2+20,380,getmaxx()/2+20,460);
line(getmaxx()/2+80,380,getmaxx()/2+80,460);
line(getmaxx()/2+20,460,getmaxx()/2+80,460);
}