#include<iostream>
using namespace std;
int isSamePart(int x1, int y1, int x2, int y2, int x3, int y3, int x4, int y4)
{
	if (x1 == x2)
	{
		if ((x4 - x1)*(x3 - x1) >= 0) return 1;
		return 0;
	}
	else if (((y2 - y1) / (x2 - x1)*(x3 - x1) + y1 - y3)*((y2 - y1) / (x2 - x1)*(x4 - x1) + y1 - y4) >= 0)return 1;
	return 0;
}
int main()
{
	int n,ax, ay, bx, by, cx, cy, x, y;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> x >> y >> ax >> ay >> bx >> by >> cx >> cy;
		if (isSamePart(ax, ay, bx, by, cx, cy, x, y) && isSamePart(ax, ay, cx, cy, bx, by, x, y) && isSamePart(cx, cy, bx, by, ax, ay, x, y))cout << "Y\n";
		else cout << "N\n";
	}
}