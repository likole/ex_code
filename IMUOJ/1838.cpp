#include<iostream>
using namespace std;
class Point
{
    int X, Y;
public:
    static int Countp;
    Point(int x = 0, int y = 0)
    {
        X = x;
        Y = y;
        Countp++;
    }
    Point(const Point &p)
    {
        X = p.X;
        Y = p.Y;
        Countp++;
    }
    ~Point()
    {
        Countp--;
    }
    friend Point myfun(Point p1, Point p2, Point p3);
    void display() { 
        cout << X << "," << Y << ","; 
    }
};
Point myfun(Point p1, Point p2, Point p3)
{
    Point tmp(p1.X + p2.X + p3.X, p1.Y + p2.Y + p3.Y);
    return tmp;
}
int Point::Countp = 0;
int main()
{
    int a, b, c;
    cin >> a >> b >> c;
    Point pp0, pp1(a, b), pp2(c);
    Point p = myfun(pp0, pp1, pp2);
    p.display();
    cout << p.Countp;
    return 0;
}