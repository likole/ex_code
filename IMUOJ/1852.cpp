#include <iostream>
using namespace std;
class Basic//基类
{
protected:
	double  r;
public:
	Basic() { r = 0; }
	Basic(double a) :r(a) {}
};
class Circular :  Basic
{
protected:
	double r, area;
public:
	Circular(double a)
	{
		r = a;
		area = 3.14 * r * r;
	}
	double getArea()
	{
		return area;
	}
};
class Column :Circular
{
protected:
	double h, cubage;
public:
	Column(double a, double b) : Circular(a)
	{
		h = b;
		cubage = getArea() * h;
	}
	double getCubage()
	{
		return cubage;
	}
};
int main()
{
	int r1, r2, h;
	cin >> r1 >> r2 >> h;
	Circular circular(r1);
	Column column(r2, h);
	cout << "圆的面积：" << circular.getArea() << endl;
	cout << "圆柱的体积：" << column.getCubage() << endl;
}