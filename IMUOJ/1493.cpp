#include<iostream>
#include<iomanip>
const double PI = 3.14;
using namespace std;
int main()
{
	int r, h;
	cin >> r >> h;
	cout << fixed << setprecision(2) << 2 * PI*r << endl;
	cout << fixed << setprecision(2) << PI*r*r << endl;
	cout << fixed << setprecision(2) << 4*PI*r*r*r/3 << endl;
	cout << fixed << setprecision(2) << 4*PI*r*r << endl;
	cout << fixed << setprecision(2) << 2*PI*r*h+2*PI*r*r<< endl;
	cout << fixed << setprecision(2) << PI*r*r*h<< endl;
	return 0;
}