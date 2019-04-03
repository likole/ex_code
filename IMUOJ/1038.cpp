#include<iostream>
#include<iomanip>
#include<cmath>
using namespace std;
void smaller(float, float, float);
void equal(float, float, float);
void larger(float, float, float);
int main()
{
	float a, b, c;
	cin >> a >> b >> c;
	int die = b*b - 4 * a*c;
	if (die < 0) smaller(a, b, c);
	else if (die == 0) equal(a, b, c);
	else larger(a, b, c);
	//cin.get();
	//cin.get();
	return 0;
}
void smaller(float a, float b, float c)
{
	cout << fixed<<  setprecision(3) <<"x1=" << -b / (a * 2) << "+" << sqrt(4 * a*c - b*b) / (a * 2) << "i ";
	cout << fixed << setprecision(3) << "x2=" << -b / (a * 2) << "-" << sqrt(4 * a*c - b*b) / (a * 2) << "i";
}
void equal(float a, float b, float c)
{
	cout << fixed << setprecision(3) << "x1=" << ((-b + sqrt(b*b - 4 * a*c)) / 2 * a) << " ";
	cout << fixed << setprecision(3) << "x2=" << ((-b - sqrt(b*b - 4 * a*c)) / 2 * a) << " ";
}
void larger(float a, float b, float c)
{
	cout << fixed << setprecision(3) << "x1=" << ((-b + sqrt(b*b - 4 * a*c)) / 2 * a) << " ";
	cout << fixed << setprecision(3) << "x2=" << ((-b - sqrt(b*b - 4 * a*c)) / 2 * a) << " ";
}