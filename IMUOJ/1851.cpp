#include<iostream>
using namespace std;
class Point
{
public:
    int x, y; //点坐标
    Point(int m, int n) { x = m; y = n; }
    void show()
    {
        cout << "(" << x << "," << y << ")";
    }
};
class HourHand :public Point //继承点类，继承来的x和y作为时针的顶点（钟表中心）
{ 
public:
    int lenth; //时针长度
    int hour; //目前时间（只表示0点3点6点9点）
    Point end; //时针末端点（针尖端）
    HourHand(int x, int y, int l, int endx, int endy) :Point (x, y),end (endx, endy)//x、y作为定点，endx、endy作为末端点
    {
        lenth= l; //l作为时针长度
             //根据定点关系判断目前时间并赋值，不符合0点3点6点9点四种情况的不予考虑
        if ((end.x-x==0)&&(end.y-y==lenth)) hour = 0;
        if ((end.x - x == lenth) && (end.y - y == 0)) hour = 3;
        if ((end.x - x == 0) && (end.y - y == -lenth)) hour = 6;
        if ((end.x - x == -lenth) && (end.y - y == 0)) hour = 9;
    }
    void show()
    {
        cout << "目前时间：" << hour << "点" << endl;
        cout << "指针：";
        Point::show();
        cout << "-->";
        end.show();
    }
};
int main()
{
    int a, b, c, d, e;
    cin >> a >> b >> c >> d >> e;
    HourHand h1(a, b, c, d, e);
    if (h1.hour == 0 || h1.hour == 3 || h1.hour == 6 || h1.hour == 9)
        h1.show();
    else
        cout << "error" << endl;
}