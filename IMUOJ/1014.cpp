#include <iostream>
#include<iomanip>
using namespace std;
int main()
{
	double r, h, C1, Sa, Sb, Va, Vb;
	cin >> r >> h;
	double PI = 3.14;
	C1 = 2 * PI*r;
	Sa = r*PI*r;
	Sb = 4 * PI*r*r;
	Va = 4 * PI*r*r*r / 3;
	Vb = r*r*PI*h;
	cout << setiosflags(ios::fixed);
	cout.precision(2);
	cout << "C1=" << C1 << endl << "Sa=" << Sa << endl << "Sb=" << Sb << endl << "Va=" << Va << endl << "Vb=" << Vb;
}