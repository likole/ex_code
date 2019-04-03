#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	int N;
	double s = 0,h=100;
	cin >> N;
	for (int i = 0; i < N; i++)
	{
		s += h;
		h /= 2;
		s += h;
	}
	s -= h;
	cout << fixed<<setprecision(4)<<s<<endl;
	//cin.get();
	//cin.get();
	return 0;
}