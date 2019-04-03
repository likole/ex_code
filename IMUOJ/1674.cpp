#include<iostream>
#include<iomanip>
#include<cmath>
using namespace std;
int main()
{
	int x_bin,x_dec=0,dm=0;
	cin >> x_bin;
	while (x_bin >= 1)
	{
		x_dec += (x_bin % 10) * pow(2,dm);
		x_bin /= 10;
		dm++;
	}
	cout << x_dec<<endl;
	cout << oct << x_dec << endl;
	cout << hex << x_dec << endl;
	//cin.get();
	//cin.get();
	return 0;
}