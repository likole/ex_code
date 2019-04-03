#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	for (int r = 1; r <= 10; r++)
	{
		double s = r*r*3.14159;
		if (s >= 40 && s <= 90)cout << "r=" << r << " area=" << fixed << setprecision(2) << s << endl;
	}
	//cin.get(); cin.get();
	return 0;
}