#include<iostream>
#include<cmath>
using namespace std;
int f(int, int);
int main()
{
	int x, y;
	cin >> x >> y;
	cout << f(x, y);
	return 0;
}
int f(int x,int y)
{
	return pow(x,y);
}